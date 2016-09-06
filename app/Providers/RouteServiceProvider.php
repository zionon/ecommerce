<?php

namespace App\Providers;

use Route;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */

    public function map(Router $router)
    {
        $this->mapFront();
        $this->mapBack();
    }
    public function mapFront()
    {
        Route::group(['namespace' => $this->namespace], function ($route) {
            require base_path('routes/front.php');
        });
    }
    public function mapBack()
    {
        Route::group([
            'namespace' => $this->namespace
        ], function ($route) {
            require base_path('routes/back.php');
        });
    }
}
