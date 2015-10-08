<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('photo');
            $table->enum('role',['super','admin','operator'])->default('operator');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                array(
                    'name' => 'Chanifuddin Fanani',
                    'email' => 'chanifuddin@gmail.com',
                    'password' => '$2y$10$tPp4A.TWCnNAFpwSQe2pmu/s5BpY7w1OXStTnypCI2oX0vBvEm4BK',
                    'role' => 'super',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
                ),
                array(
                    'name' => 'Admin Lazada',
                    'email' => 'admin@lazada.com',
                    'password' => '$2y$10$tPp4A.TWCnNAFpwSQe2pmu/s5BpY7w1OXStTnypCI2oX0vBvEm4BK',
                    'role' => 'admin',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
                ),
                array(
                    'name' => 'Admin Blibli',
                    'email' => 'admin@blibli.com',
                    'password' => '$2y$10$tPp4A.TWCnNAFpwSQe2pmu/s5BpY7w1OXStTnypCI2oX0vBvEm4BK',
                    'role' => 'admin',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
                ),
                array(
                    'name' => 'Admin Bukalapak',
                    'email' => 'admin@bukalapak.com',
                    'password' => '$2y$10$tPp4A.TWCnNAFpwSQe2pmu/s5BpY7w1OXStTnypCI2oX0vBvEm4BK',
                    'role' => 'admin',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
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
        Schema::drop('users');
    }
}
