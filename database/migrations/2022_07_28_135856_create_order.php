<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('order_num')->collation('utf8mb4_unicode_ci');
            $table->decimal('order_total');
            $table->tinyInteger('order_status');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('customer_name')->collation('utf8mb4_unicode_ci');
            $table->string('customer_phone')->collation('utf8mb4_unicode_ci');
            $table->string('customer_address')->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('payment_id');
            $table->string('description')->collation('utf8mb4_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
