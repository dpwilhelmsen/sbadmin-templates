<?php

namespace ExploreOrd\SBAdminTemplates;

use Illuminate\Support\ServiceProvider;

class SBAdminTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'adminlte-templates');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
