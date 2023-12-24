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
        DB::statement(
            "CREATE 
                ALGORITHM = UNDEFINED 
                DEFINER = `root`@`localhost` 
                SQL SECURITY DEFINER
            VIEW `laravelapp`.`order_view` AS
                SELECT 
                    `laravelapp`.`users`.`id` AS `user_id`,
                    `laravelapp`.`users`.`name` AS `user_name`,
                    `laravelapp`.`products`.`name` AS `product_name`,
                    `laravelapp`.`products`.`price` AS `price`,
                    `laravelapp`.`invoices`.`purchase_date` AS `purchase_date`,
                    `laravelapp`.`invoices_detail`.`is_purchased` AS `is_purchased`,
                    (`laravelapp`.`invoices_detail`.`quantity_purchase` * `laravelapp`.`products`.`price`) AS `thanhtien`,
                    `laravelapp`.`invoices_detail`.`id` AS `id`
                FROM
                    (((`laravelapp`.`products`
                    JOIN `laravelapp`.`invoices_detail` ON ((`laravelapp`.`products`.`id` = `laravelapp`.`invoices_detail`.`product_id`)))
                    JOIN `laravelapp`.`invoices` ON ((`laravelapp`.`invoices`.`id` = `laravelapp`.`invoices_detail`.`invoice_id`)))
                    JOIN `laravelapp`.`users` ON ((`laravelapp`.`invoices`.`customer_id` = `laravelapp`.`users`.`id`)))
                WHERE
                    (`laravelapp`.`invoices_detail`.`is_purchased` = 0)"
            );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS order_view");
    }
};
