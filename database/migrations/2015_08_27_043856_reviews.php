<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('on_locations') -> unsigned() -> default(0);
            $table->foreign('on_locations')
                ->references('id')->on('locations')
                ->onDelete('cascade');
            $table -> integer('from_user') -> unsigned() -> default(0);
            $table->foreign('from_user')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->text('body');
            $table->boolean('recommend');
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
        Schema::drop('reviews');
    }
}
