<?php

namespace CalvinKimani\Aura\Providers;

use Illuminate\Support\ServiceProvider;

class AuraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    	$this->loadViewsFrom(__DIR__.'/../resources/views', 'aura');

        // Use 'aura-config' tag instead of 'aura'
    	$this->publishes([__DIR__.'/../config/aura.php' => config_path('aura.php')], 'aura-config');
    }

    public function register()
    {
    	$this->mergeConfigFrom(
    		__DIR__.'/../config/aura.php', 'aura'
    	);
    }
}
