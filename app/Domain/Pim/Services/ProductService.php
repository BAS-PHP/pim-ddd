<?php

namespace App\Domain\Pim\Services;

use App\Domain\Pim\Entities\Product;
use App\Domain\Pim\Repositories\ProductRepository;

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