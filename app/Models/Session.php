<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $primaryKey = 'id'; // Giả định, tùy thuộc vào cấu trúc thực tế
    protected $fillable = []; // Thêm các cột nếu cần, thường do Laravel Session quản lý
}
