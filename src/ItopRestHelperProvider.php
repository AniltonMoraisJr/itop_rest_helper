<?php

namespace AniltonMoraisJr\ItopRestHelper;

use Illuminate\Support\ServiceProvider;
use ItopRestHelper;

class ItopRestHelperProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Publishing the config file
        $this->publishes([
            __DIR__.'/config' => config_path('itopresthelper'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Publishing config file
        $this->mergeConfigFrom(
            __DIR__ . '/config/itopresthelper.php', 'itopresthelper'
        );
        //Publishing helper
        App::bind('ItopRestHelper', function(){
            return new ItopRestHelper;
        });
    }
}
