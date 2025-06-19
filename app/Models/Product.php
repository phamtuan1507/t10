<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey  = "id";
    protected $guarded = [];

    public function Brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function ProductCategory(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function ProductImage(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function ProductDetails(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function ProductComments(){
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }

    public function OrderDetails(){
        return $this->hasMany(OrderDetails::class, 'product_id', 'id');
    }
}
