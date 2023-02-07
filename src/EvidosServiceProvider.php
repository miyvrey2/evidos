<?php

namespace Miyvrey2\Evidos;

use Illuminate\Support\ServiceProvider;

class EvidosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/evidos.php', 'evidos');

        $this->app->singleton(SignHost::class, function ($app) {
            return new SignHost(env("EVIDOS_APP_KEY"), env("EVIDOS_API_KEY"));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
