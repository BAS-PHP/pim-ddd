<?php

namespace App\Domain\Pim\Http\Controllers;

use App\Domain\Pim\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @throws \JsonException
     */
    public function show(int $id): JsonResponse
    {
        $product = $this->productService->find($id);

        if (is_null($product)) {
            return response()->json(
                ['message' => 'Not found'],
                Response::HTTP_NOT_FOUND
            );
        }

        return response()->json(
            ["product" => json_encode($product, JSON_THROW_ON_ERROR)],
            Response::HTTP_OK
        );
    }
}
