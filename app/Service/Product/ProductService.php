<?php

namespace App\Service\Product;

use App\Models\Product;
use App\Service\Product\ProductServiceInterface;
use App\Service\BaseService;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }
}
