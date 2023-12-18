<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // When create a order detail, add the price to the total price of the order (products.price * order_details.quantity)
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER create_order_detail_trigger AFTER INSERT ON order_details
            FOR EACH ROW
            BEGIN
                UPDATE orders
                SET total_money = total_money + (SELECT product_price FROM products WHERE products.id = NEW.product_id) * NEW.quantity
                WHERE orders.id = NEW.order_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS create_order_detail_trigger');
    }
};
