<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MasonryComposer extends Composer
{
    protected static $views = [
        'page-blocks',
    ];

    public function with(): array
    {
        $basePath = resource_path('views/components/blocks');
        $blocks = [];

        foreach (glob("{$basePath}/*", GLOB_ONLYDIR) as $dir) {
            $category = basename($dir);
            $components = [];

            foreach (glob("{$dir}/*.blade.php") as $file) {
                $components[] = basename($file, '.blade.php');
                if (basename($file) === 'showcase.blade.php') {
                    array_pop($components);
                }
            }

            $blocks[$category] = $components;
        }
        
        $categories = array_keys($blocks);
        $components = array_merge(...array_values($blocks));

        $items = [];
        foreach ($components as $component) {
            $items[] = [
                'title' => $component ?? 'Project Beta',
                'description' => isset($description) ? $description : 'No description available.',
                'image' => asset('images/projects/beta.jpg'),
                'category' => 'Mobile',
                'number' => count($components),
                'link' => null,
            ];
        }

        return ['filters' => $categories, 'cards' => $items];
    }
}
