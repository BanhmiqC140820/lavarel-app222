<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE OR REPLACE VIEW `order_view` AS
        SELECT
            users.id as user_id,
            users.name as user_name,
            products.name as product_name,
            products.price,
            invoices.purchase_date,
            invoices_detail.is_purchased,
            invoices_detail.quantity_purchase * products.price as thanhtien,
            invoices_detail.id
        FROM
            laravelapp.products
        INNER JOIN laravelapp.invoices_detail ON laravelapp.products.id = laravelapp.invoices_detail.product_id
        INNER JOIN laravelapp.invoices ON laravelapp.invoices.id = laravelapp.invoices_detail.invoice_id
        INNER JOIN laravelapp.users ON laravelapp.invoices.customer_id = laravelapp.users.id
        WHERE invoices_detail.is_purchased = 0;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS order_view");
    }
    
};
