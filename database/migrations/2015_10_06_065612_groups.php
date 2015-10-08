<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->boolean('active');
            $table->timestamps();
        });


        DB::table('groups')->insert(
            array(
                array(
                    'name' => 'Lazada',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in nisi volutpat lorem convallis facilisis a nec arcu. In mollis dolor ex, et tempus elit egestas et',
                    'active' => TRUE,
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
                ),
                array(
                    'name' => 'Blibli',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in nisi volutpat lorem convallis facilisis a nec arcu. In mollis dolor ex, et tempus elit egestas et',
                    'active' => TRUE,
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
                ),
                array(
                    'name' => 'Bukalapak',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in nisi volutpat lorem convallis facilisis a nec arcu. In mollis dolor ex, et tempus elit egestas et',
                    'active' => TRUE,
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
        Schema::drop('groups');
    }
}
