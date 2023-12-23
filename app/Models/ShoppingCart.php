<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'gio_hang_temp'; // Đặt tên bảng ảo (không tồn tại trong CSDL)
    public $timestamps = false; // Không sử dụng timestamps (created_at, updated_at)
    
    protected $fillable = [
        'mahang',
        'tenhang',
        'gia',
        'soluongmua',
        'img',
    ];
    
}
