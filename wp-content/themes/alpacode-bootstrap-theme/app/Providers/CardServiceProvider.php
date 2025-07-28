<?php
// app/Providers/CardServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register card components
        Blade::component('card-grid', \App\View\Components\CardGrid::class);
        Blade::component('card', \App\View\Components\Card::class);
        
        // Register card directives for additional functionality
        Blade::directive('cardGrid', function ($expression) {
            return "<?php echo app('card-grid')->render($expression); ?>";
        });
    }
}