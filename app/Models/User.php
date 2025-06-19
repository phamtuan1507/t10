<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'email', 'password_hash'];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }
}
