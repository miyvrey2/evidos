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
