<?php

namespace Mega\HelloWorld\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'megaHelloWorld');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}