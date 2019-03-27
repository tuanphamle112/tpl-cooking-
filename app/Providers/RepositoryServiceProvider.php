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
        $models = [
            'User',
            'Recipe'
        ];
        
        foreach($models as $model)
        {
            $this->app->singleton(
                "App\Constracts\Eloquent\\{$model}Repository",
                "App\Repositories\Eloquent\\{$model}RepositoryEloquent"
            );
        }

    }
}
