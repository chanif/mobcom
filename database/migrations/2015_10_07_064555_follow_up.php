<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FollowUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_up', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('group_id') -> unsigned() -> default(0);
            $table->foreign('group_id')
                  ->references('id')->on('groups')
                  ->onDelete('cascade');
            $table -> integer('telp') -> unsigned() -> default(0);
            $table -> integer('sms') -> unsigned() -> default(0);
            $table -> integer('email') -> unsigned() -> default(0);
            $table -> integer('nothing') -> unsigned() -> default(0);
        });


        DB::table('follow_up')->insert(
            array(
                array(
                    'group_id' => 1,
                    'telp' => 200,
                    'sms' => 300,
                    'email' => 400,
                    'nothing' => 500,
                ),
                array(
                    'group_id' => 2,
                    'telp' => 300,
                    'sms' => 300,
                    'email' => 200,
                    'nothing' => 100,
                ),
                array(
                    'group_id' => 3,
                    'telp' => 200,
                    'sms' => 300,
                    'email' => 400,
                    'nothing' => 500,
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('follow_up');
    }
}
