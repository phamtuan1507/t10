<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $primaryKey = 'ad_id';
    protected $fillable = ['title', 'image_url', 'link_url', 'start_date', 'end_date'];
}
