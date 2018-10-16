<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->tinyInteger('isDelivered');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('number');
            $table->string('radios');
            $table->string('cash_on_delivery');
            $table->float('total');
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
        Schema::dropIfExists('orders');
    }
}
