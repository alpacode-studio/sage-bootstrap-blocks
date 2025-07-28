<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ComponentGridComposer extends Composer
{
    protected static $views = [
        'page-grid', // Name of your Blade view file (components-grid.blade.php)
        'page-test',
    ];

    public function with(): array
    {
        $basePath = resource_path('views/components/blocks');
        $categories = [];

        foreach (glob("{$basePath}/*", GLOB_ONLYDIR) as $dir) {
            $category = basename($dir);
            $components = [];

            foreach (glob("{$dir}/*.blade.php") as $file) {
                $components[] = basename($file, '.blade.php');
                if (basename($file) === 'showcase.blade.php') {
                    array_pop($components);
                }
            }

            $categories[$category] = $components;
        }

        return ['componentCategories' => $categories];
    }
}
