<?php
// app/View/Components/CardGrid.php

namespace App\View\Components;

use Illuminate\View\Component;

class CardGrid extends Component
{
    public array $items;
    public string $columns;
    public string $gap;
    public string $cardType;
    public bool $showImage;
    public bool $showMeta;
    public bool $showExcerpt;
    public bool $showButton;
    public string $buttonText;
    public string $imageAspect;
    public bool $animation;

    /**
     * Create a new component instance.
     */
    public function __construct(
        array $items = [],
        string $columns = 'auto',
        string $gap = 'md',
        string $cardType = 'default',
        bool $showImage = true,
        bool $showMeta = true,
        bool $showExcerpt = true,
        bool $showButton = true,
        string $buttonText = 'Read More',
        string $imageAspect = 'aspect-video',
        bool $animation = true
    ) {
        $this->items = $items;
        $this->columns = $columns;
        $this->gap = $gap;
        $this->cardType = $cardType;
        $this->showImage = $showImage;
        $this->showMeta = $showMeta;
        $this->showExcerpt = $showExcerpt;
        $this->showButton = $showButton;
        $this->buttonText = $buttonText;
        $this->imageAspect = $imageAspect;
        $this->animation = $animation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.card-grid');
    }

    /**
     * Validate and sanitize items array
     */
    public function getProcessedItems(): array
    {
        return array_map(function ($item) {
            return [
                'title' => $item['title'] ?? '',
                'excerpt' => $item['excerpt'] ?? '',
                'image' => $item['image'] ?? '',
                'url' => $item['url'] ?? '',
                'date' => $item['date'] ?? '',
                'author' => $item['author'] ?? '',
                'category' => $item['category'] ?? '',
                'tags' => $item['tags'] ?? [],
                'readTime' => $item['readTime'] ?? ''
            ];
        }, $this->items);
    }
}