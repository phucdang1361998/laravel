<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('order_id');
            $table->tinyInteger('product_id');
            $table->string('product_name')->collation('utf8mb4_unicode_ci');
            $table->decimal('product_price');
            $table->integer('product_quantity');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->decimal('total_price');
            $table->string('product_image')->collation('utf8mb4_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
