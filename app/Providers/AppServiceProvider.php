<?php

namespace App\Providers;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Product\ProductRepositoryInterface::class,
            \App\Repositories\Product\ProductRepository::class
        );

        $this->app->singleton(
            \App\Service\Product\ProductServiceInterface::class,
            \App\Service\Product\ProductService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Model::unguard();
    }
}
