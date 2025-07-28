<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        \Roots\view()->composer(
            'components-grid',
            \App\View\Composers\ComponentGridComposer::class
        );
        \Roots\view()->composer(
            'page-test',
            \App\View\Composers\MasonryComposer::class
        );
    }
}
