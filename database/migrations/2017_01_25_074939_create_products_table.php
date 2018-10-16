<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('short_title');
            $table->text('long_title');
            $table->text('short_description');
            $table->mediumText('long_description');
            $table->string('brand_name');
            $table->string('brand_photo');
            $table->string('product_photo');
            $table->integer('real_price');
            $table->integer('discunt_price');
            $table->integer('discunt_price_by_parsents');
            $table->integer('quantity');
            $table->string('instagram_links')->nullable();
            $table->string('facebook_links')->nullable();
            $table->string('youtube_links')->nullable();
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
        Schema::dropIfExists('products');
    }
}
