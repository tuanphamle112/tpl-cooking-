<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'App\Constracts\Eloquent\UserRepository',
            'App\Repositories\Eloquent\UserRepositoryEloquent'
        );

        $this->app->singleton(
            'App\Constracts\Eloquent\RecipeRepository',
            'App\Repositories\Eloquent\RecipeRepositoryEloquent'
        );
    }
}
