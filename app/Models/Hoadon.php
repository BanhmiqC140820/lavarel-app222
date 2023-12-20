<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $fillable = ['Mahoadon', 'Makhachhang', 'Ngaymua', 'Maban', 'Damua'];
    
    protected $primaryKey = 'Mahoadon'; // Sử dụng Mahoadon làm khóa chính
    public $incrementing = false; // Tắt tự động tăng
    protected $keyType = 'bigint';
    
   
}
