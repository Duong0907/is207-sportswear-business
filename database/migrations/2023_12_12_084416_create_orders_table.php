<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('total_money')->default(0);
            $table->boolean('paid')->default(false);
            $table->string('shipping_note');
            $table->string('shipping_address');
            $table->string('shipping_phonenumber');
            $table->string('shipping_firstname');
            $table->string('shipping_lastname');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();  

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
