<?php

namespace Thiagoprz\SimpleRole;
use Illuminate\Support\ServiceProvider;
use Thiagoprz\SimpleRole\Http\Middleware\SimpleRole;

/**
 * Class SimpleRoleServiceProvider
 * @package Thiagoprz\SimpleRole
 */
class SimpleRoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Loading migration
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // Adding the middleware to the RouteMiddleware section of the app
        $this->app['router']->middleware('role', SimpleRole::class);
    }

}