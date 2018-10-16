<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContuctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contucts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('phone');
            $table->string('hours');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('contucts');
    }
}
