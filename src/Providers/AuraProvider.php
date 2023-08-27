<?php

namespace CalvinKimani\Aura\Providers;

use Illuminate\Support\ServiceProvider;

class AuraProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'aura');
    }
}