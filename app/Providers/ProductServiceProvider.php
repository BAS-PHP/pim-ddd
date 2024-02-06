<?php

namespace App\Providers;

use App\Pim\Domain\Contracts\Repositories\ProductRepository;
use App\Pim\Infrastructure\Repositories\ProductEloquentRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, ProductEloquentRepository::class);
    }
}