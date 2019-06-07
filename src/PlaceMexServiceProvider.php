<?php

namespace AquinoAldair\PlaceMex;

use Illuminate\Support\ServiceProvider;

class PlaceMexServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'aquinoaldair');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'aquinoaldair');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/placemex.php', 'placemex');

        // Register the service the package provides.
        $this->app->singleton('placemex', function ($app) {
            return new PlaceMex;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['placemex'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/placemex.php' => config_path('placemex.php'),
        ], 'placemex.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/aquinoaldair'),
        ], 'placemex.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/aquinoaldair'),
        ], 'placemex.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/aquinoaldair'),
        ], 'placemex.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
