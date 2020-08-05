<?php

namespace Wisdmlabs\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->make('Wisdmlabs\Todolist\TodolistController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([__DIR__.'/views' => base_path('resources/views/wisdmlabs/todolist')]);
        $this->publishes([__DIR__.'/migrations' => base_path('database/migrations')], 'migrations');
    }
}
