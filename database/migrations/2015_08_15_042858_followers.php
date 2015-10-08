<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Followers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('follower') -> unsigned();
            $table->foreign('follower')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table -> integer('following') -> unsigned();
            $table->foreign('following')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->enum('0 Trash, 1 Active', ['0', '1']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('followers');
    }
}
