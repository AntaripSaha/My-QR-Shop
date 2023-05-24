<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_payments', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('product_quantity')->default(0);
            $table->string('total_paid')->default(0);
            $table->string('user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('stripe_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_payments');
    }
}
