<?php

namespace App\Pim\Domain\Contracts\Repositories;

use App\Pim\Domain\Entities\Product;

interface ProductRepository
{
    public function find(int $id): ?Product;
}