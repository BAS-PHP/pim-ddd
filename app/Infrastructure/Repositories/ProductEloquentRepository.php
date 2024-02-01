<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Pim\Entities\Product;
use App\Domain\Pim\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;

class ProductEloquentRepository implements ProductRepository
{
    public function find(int $id): ?Product
    {
        $record = DB::table('products')->where('id', $id)->first();

        if ($record === null) {
            return null;
        }

        return $this->instantiateModel($record);
    }

    public function instantiateModel($record): Product
    {
        //add foreach loop to map the db

        return new Product();
    }
}