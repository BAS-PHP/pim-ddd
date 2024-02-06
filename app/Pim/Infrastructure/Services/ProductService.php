<?php

namespace App\Pim\Infrastructure\Services;

use App\Pim\Domain\Contracts\Repositories\ProductRepository;
use App\Pim\Domain\Entities\Product;

class ProductService
{
    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function find(int $id): Product
    {
        return $this->repository->find($id);
    }
}