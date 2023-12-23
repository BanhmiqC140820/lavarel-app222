<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $table = 'invoices_detail';
    public $timestamps = false;
    protected $fillable = [
        'id','product_id', 'invoice_id', 'quantity_purchase','is_purchased'
    ];
}
