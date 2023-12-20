<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'name', 'description', 'price', 'quantity', 'origin', 'img'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
