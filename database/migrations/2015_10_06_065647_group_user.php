<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('group_id') -> unsigned() -> default(0);
            $table->foreign('group_id')
                ->references('id')->on('groups')
                ->onDelete('cascade');
            $table -> integer('user_id') -> unsigned() -> default(0);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        DB::table('group_user')->insert(
            array(
                array(
                    'group_id' => 1,
                    'user_id' => 2,
                ),
                array(
                    'group_id' => 2,
                    'user_id' => 3,
                ),
                array(
                    'group_id' => 3,
                    'user_id' => 4,
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
        Schema::drop('group_user');
    }
}
