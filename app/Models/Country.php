<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false; // Tắt tính năng timestamp
    protected $primaryKey = 'country_id';
    protected $fillable = ['name'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_countries', 'country_id', 'movie_id');
    }
}
