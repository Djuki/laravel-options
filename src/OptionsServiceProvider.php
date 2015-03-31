<?php namespace Djuki\Options;

use Illuminate\Support\ServiceProvider;

class OptionsServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('eloquent.options', function() {
            return new EloquentOptions();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}