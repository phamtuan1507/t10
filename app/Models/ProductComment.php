<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    protected $table = 'product_comments';
    protected $primaryKey  = "id";
    protected $guarded = [];

    public function Products(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
