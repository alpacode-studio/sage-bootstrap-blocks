<?php
// app/View/Composers/Showcase.php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Illuminate\Support\Facades\File;

class Showcase extends Composer
{
    protected static $views = ['page-showcase'];

    public function with()
    {
        return [
            'components' => $this->getComponents(),
            'categories' => $this->getCategories(),
            'debug' => $this->getDebugInfo(),
        ];
    }

    protected function getComponents()
    {
        $components = [];
        $componentPath = resource_path('views/components');
        
        if (!File::exists($componentPath)) {
            return $this->getFallbackComponents();
        }

        // Recursively scan ALL files in components directory
        $files = $this->getAllBladeFiles($componentPath);
        
        foreach ($files as $file) {
            // Get relative path from components directory
            $relativePath = str_replace($componentPath . DIRECTORY_SEPARATOR, '', $file);
            $relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
            $relativePath = str_replace('.blade.php', '', $relativePath);
            
            // Skip config file
            if (basename($relativePath) === 'showcase-config') {
                continue;
            }
            
            // Convert path to dot notation
            $componentName = str_replace('/', '.', $relativePath);
            
            // Extract category from folder structure
            $pathParts = explode('/', $relativePath);
            $category = count($pathParts) > 1 ? $pathParts[0] : 'general';
            
            // Create readable name from filename
            $displayName = $this->createDisplayName($pathParts[count($pathParts) - 1]);
            
            // Try to extract code from file
            $code = $this->extractCodeFromFile($file);
            
            $components[] = [
                'name' => $displayName,
                'path' => 'components.' . $componentName,
                'category' => $category,
                'description' => $this->generateDescription($displayName, $category),
                'tags' => $this->generateTags($displayName, $category),
                'code' => $code,
                'file_path' => $file, // For debugging
                'relative_path' => $relativePath
            ];
        }

        return $components;
    }

    protected function getAllBladeFiles($directory)
    {
        $files = [];
        
        if (!is_dir($directory)) {
            return $files;
        }
        
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS)
        );
        
        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'php' && str_ends_with($file->getFilename(), '.blade.php')) {
                $files[] = $file->getRealPath();
            }
        }
        
        return $files;
    }

    protected function getCategories()
    {
        $componentPath = resource_path('views/components');
        $categories = ['general'];
        
        if (!File::exists($componentPath)) {
            return $categories;
        }

        // Recursively get all directories
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($componentPath, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );
        
        foreach ($iterator as $file) {
            if ($file->isDir()) {
                $relativePath = str_replace($componentPath . DIRECTORY_SEPARATOR, '', $file->getRealPath());
                $relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
                
                // Get first level directory as category
                $pathParts = explode('/', $relativePath);
                if (!empty($pathParts[0])) {
                    $categories[] = $pathParts[0];
                }
            }
        }

        return array_unique($categories);
    }

    protected function createDisplayName($filename)
    {
        return ucwords(str_replace(['-', '_'], ' ', $filename));
    }

    protected function generateDescription($name, $category)
    {
        return "A {$name} component from the {$category} category";
    }

    protected function generateTags($name, $category)
    {
        $tags = [$category];
        $nameParts = explode(' ', strtolower($name));
        $tags = array_merge($tags, $nameParts);
        return array_unique($tags);
    }

    protected function extractCodeFromFile($filePath)
    {
        try {
            $content = File::get($filePath);
            
            // Look for @showcase block first
            if (preg_match('/@showcase\s*\n(.*?)\n@endshowcase/s', $content, $matches)) {
                return trim($matches[1]);
            }
            
            // Otherwise clean up the full file content
            $content = preg_replace('/^<\?php.*?\?>\s*/s', '', $content);
            $content = preg_replace('/@php.*?@endphp/s', '', $content);
            $content = preg_replace('/@props\([^)]*\)/', '', $content);
            $content = preg_replace('/\{\{--.*?--\}\}/s', '', $content);
            
            // Clean up whitespace
            $content = trim($content);
            
            // If content is too long, truncate it
            if (strlen($content) > 800) {
                $content = substr($content, 0, 800) . '...';
            }
            
            return $content;
        } catch (\Exception $e) {
            return 'Code preview not available: ' . $e->getMessage();
        }
    }

    protected function getFallbackComponents()
    {
        return [
            [
                'name' => 'No Components Found',
                'path' => '',
                'category' => 'info',
                'description' => 'No components found in resources/views/components/',
                'tags' => ['info'],
                'code' => '<p>Please create some components in resources/views/components/</p>',
                'file_path' => 'N/A',
                'relative_path' => 'N/A'
            ]
        ];
    }

    protected function getDebugInfo()
    {
        $componentPath = resource_path('views/components');
        $debug = [
            'component_path' => $componentPath,
            'path_exists' => File::exists($componentPath),
            'scanned_files' => [],
            'scanned_directories' => [],
        ];

        if (File::exists($componentPath)) {
            $debug['scanned_files'] = $this->getAllBladeFiles($componentPath);
            
            $iterator = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($componentPath, \RecursiveDirectoryIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::SELF_FIRST
            );
            
            foreach ($iterator as $file) {
                if ($file->isDir()) {
                    $debug['scanned_directories'][] = $file->getRealPath();
                }
            }
        }

        return $debug;
    }
}