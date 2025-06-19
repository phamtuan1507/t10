<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Service\Product\ProductServiceInterface;

class ProductDetailController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }
    public function index($id)
    {
        $product = Product::with('ProductDetails')->findOrFail($id);
        // $productImg = Product::with('ProductImage')->findOrFail($id);
        $productBrand = Brand::with('Products')->findOrFail($id);


        $productImg = $this->productService->find($id);
        return view('product-detail', compact('product','productImg','productBrand'));
    }
}
