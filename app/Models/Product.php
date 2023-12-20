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
        'id_product','name', 'description', 'price', 'quantity', 'origin', 'img','category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
