<?php

namespace App\Domain\Pim\Repositories;

use App\Domain\Pim\Entities\Product;

interface ProductRepository
{
    public function find(int $id): ?Product;
}