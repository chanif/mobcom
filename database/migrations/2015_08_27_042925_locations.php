<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('author_id') -> unsigned() -> default(0);
            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('location');
            $table->string('nearest_mrt');
            $table->string('phone')->unique();
            $table->string('website');
            $table->boolean('active');
            $table->string('last_order');
            $table->enum('price',['<$30','$30-$59','$60-$100','>$100'])->default('$30-$59');
            $table->boolean('free_wifi')->default(0);
            $table->boolean('pet_friendly')->default(0);
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
        Schema::drop('locations');
    }
}
