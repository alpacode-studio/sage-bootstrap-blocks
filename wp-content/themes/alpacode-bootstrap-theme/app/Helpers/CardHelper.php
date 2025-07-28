<?php
// app/Helpers/CardHelper.php

namespace App\Helpers;

class CardHelper
{
    /**
     * Generate card data from WordPress posts
     */
    public static function fromWordPressPosts($posts): array
    {
        return array_map(function ($post) {
            return [
                'title' => $post->post_title,
                'excerpt' => wp_trim_words($post->post_content, 30),
                'image' => get_the_post_thumbnail_url($post->ID, 'medium'),
                'url' => get_permalink($post->ID),
                'date' => $post->post_date,
                'author' => get_the_author_meta('display_name', $post->post_author),
                'category' => get_the_category($post->ID)[0]->name ?? '',
                'tags' => array_map(fn($tag) => $tag->name, get_the_tags($post->ID) ?: []),
                'readTime' => self::calculateReadTime($post->post_content)
            ];
        }, $posts);
    }

    /**
     * Generate card data from Eloquent models
     */
    public static function fromEloquentCollection($collection, array $mapping = []): array
    {
        $defaultMapping = [
            'title' => 'title',
            'excerpt' => 'excerpt',
            'image' => 'featured_image',
            'url' => 'slug',
            'date' => 'created_at',
            'author' => 'author.name',
            'category' => 'category.name',
            'tags' => 'tags.name',
        ];

        $mapping = array_merge($defaultMapping, $mapping);

        return $collection->map(function ($item) use ($mapping) {
            $cardData = [];
            
            foreach ($mapping as $cardField => $modelField) {
                $cardData[$cardField] = data_get($item, $modelField);
            }

            // Generate URL if slug is provided
            if (isset($cardData['url']) && !filter_var($cardData['url'], FILTER_VALIDATE_URL)) {
                $cardData['url'] = url($cardData['url']);
            }

            // Calculate read time if content is available
            if (isset($item->content)) {
                $cardData['readTime'] = self::calculateReadTime($item->content);
            }

            return $cardData;
        })->toArray();
    }

    /**
     * Calculate estimated reading time
     */
    public static function calculateReadTime(string $content): string
    {
        $wordsPerMinute = 200;
        $wordCount = str_word_count(strip_tags($content));
        $minutes = ceil($wordCount / $wordsPerMinute);
        
        return $minutes . ' min read';
    }

    /**
     * Generate placeholder image URL
     */
    public static function getPlaceholderImage(int $width = 400, int $height = 300, string $text = 'No Image'): string
    {
        $config = config('cards.placeholder');
        
        if ($config['enabled']) {
            return str_replace(
                ['400', '300', 'No+Image'],
                [$width, $height, urlencode($text)],
                $config['url']
            );
        }

        return "https://via.placeholder.com/{$width}x{$height}/f3f4f6/9ca3af?text=" . urlencode($text);
    }

    /**
     * Validate card item structure
     */
    public static function validateCardItem(array $item): bool
    {
        $required = ['title'];
        $optional = ['excerpt', 'image', 'url', 'date', 'author', 'category', 'tags', 'readTime'];
        
        // Check if at least title exists
        if (!isset($item['title']) || empty($item['title'])) {
            return false;
        }

        return true;
    }

    /**
     * Sanitize card data
     */
    public static function sanitizeCardData(array $items): array
    {
        return array_map(function ($item) {
            return [
                'title' => strip_tags($item['title'] ?? ''),
                'excerpt' => strip_tags($item['excerpt'] ?? ''),
                'image' => filter_var($item['image'] ?? '', FILTER_VALIDATE_URL) ? $item['image'] : '',
                'url' => filter_var($item['url'] ?? '', FILTER_VALIDATE_URL) ? $item['url'] : '',
                'date' => $item['date'] ?? '',
                'author' => strip_tags($item['author'] ?? ''),
                'category' => strip_tags($item['category'] ?? ''),
                'tags' => is_array($item['tags'] ?? []) ? 
                    array_map(fn($tag) => strip_tags($tag), $item['tags']) : [],
                'readTime' => strip_tags($item['readTime'] ?? '')
            ];
        }, array_filter($items, [self::class, 'validateCardItem']));
    }

    /**
     * Sort cards by date
     */
    public static function sortByDate(array $items, string $order = 'desc'): array
    {
        usort($items, function ($a, $b) use ($order) {
            $dateA = strtotime($a['date'] ?? '');
            $dateB = strtotime($b['date'] ?? '');
            
            if ($order === 'desc') {
                return $dateB <=> $dateA;
            }
            
            return $dateA <=> $dateB;
        });
        
        return $items;
    }

    /**
     * Filter cards by category
     */
    public static function filterByCategory(array $items, string $category): array
    {
        return array_filter($items, function ($item) use ($category) {
            return strtolower($item['category'] ?? '') === strtolower($category);
        });
    }

    /**
     * Filter cards by tags
     */
    public static function filterByTags(array $items, array $tags): array
    {
        return array_filter($items, function ($item) use ($tags) {
            if (empty($item['tags']) || !is_array($item['tags'])) {
                return false;
            }
            
            return !empty(array_intersect(
                array_map('strtolower', $item['tags']),
                array_map('strtolower', $tags)
            ));
        });
    }

    /**
     * Paginate cards
     */
    public static function paginate(array $items, int $perPage = 12, int $page = 1): array
    {
        $offset = ($page - 1) * $perPage;
        
        return [
            'items' => array_slice($items, $offset, $perPage),
            'currentPage' => $page,
            'perPage' => $perPage,
            'total' => count($items),
            'lastPage' => ceil(count($items) / $perPage),
            'hasMore' => count($items) > ($offset + $perPage)
        ];
    }

    /**
     * Search cards
     */
    public static function search(array $items, string $query): array
    {
        $query = strtolower($query);
        
        return array_filter($items, function ($item) use ($query) {
            $searchableFields = [
                $item['title'] ?? '',
                $item['excerpt'] ?? '',
                $item['category'] ?? '',
                implode(' ', $item['tags'] ?? [])
            ];
            
            $searchableText = strtolower(implode(' ', $searchableFields));
            
            return strpos($searchableText, $query) !== false;
        });
    }

    /**
     * Get unique categories from cards
     */
    public static function getCategories(array $items): array
    {
        $categories = array_map(function ($item) {
            return $item['category'] ?? '';
        }, $items);
        
        return array_unique(array_filter($categories));
    }

    /**
     * Get unique tags from cards
     */
    public static function getTags(array $items): array
    {
        $tags = [];
        
        foreach ($items as $item) {
            if (!empty($item['tags']) && is_array($item['tags'])) {
                $tags = array_merge($tags, $item['tags']);
            }
        }
        
        return array_unique($tags);
    }
}