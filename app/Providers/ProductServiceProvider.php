<?php

namespace App\Providers;

use App\Domain\Pim\Repositories\ProductRepository;
use App\Infrastructure\Repositories\ProductEloquentRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, ProductEloquentRepository::class);
    }
}