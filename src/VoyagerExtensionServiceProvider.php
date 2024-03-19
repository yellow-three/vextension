<?php

namespace YellowThree\VoyagerExtension;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use YellowThree\VoyagerExtension\FormFields\FilePond;

class VoyagerExtensionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'vextension');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vextension');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getConfigFile() => config_path('vextension.php'),
            ], 'vextension');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/vextension'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/vextension'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/vextension'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        $this->registerFields();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom($this->getConfigFile(), 'vextension');

        // Register the main class to use with the facade
        $this->app->singleton('vextension', function () {
            return new VoyagerExtension;
        });
    }

    /**
     * Register new fields.
     */
    private function registerFields(): void
    {
        Voyager::addFormField(FilePond::class);
    }

    private function getConfigFile(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'vextension.php';
    }
}
