<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Statistic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('group_id') -> unsigned() -> default(0);
            $table->foreign('group_id')
                ->references('id')->on('groups')
                ->onDelete('cascade');
            $table -> integer('click') -> unsigned() -> default(0);
            $table -> integer('terbayar') -> unsigned() -> default(0);
            $table -> integer('tak_terbayar') -> unsigned() -> default(0);
            $table->timestamps();
        });

        DB::table('statistic')->insert(
            array(
                array(
                    'group_id' => 1,
                    'click' => 5000,
                    'terbayar' => 2200,
                    'tak_terbayar' => 1000,
                    'created_at' => '2015-08-01 07:14:21',
                    'updated_at' => '2015-08-01 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 4200,
                    'terbayar' => 2500,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-02 07:14:21',
                    'updated_at' => '2015-08-02 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 5500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-03 07:14:21',
                    'updated_at' => '2015-08-03 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 7000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-04 07:14:21',
                    'updated_at' => '2015-08-04 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 6000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-05 07:14:21',
                    'updated_at' => '2015-08-05 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 4500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-06 07:14:21',
                    'updated_at' => '2015-08-06 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 4000,
                    'terbayar' => 2000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-07 07:14:21',
                    'updated_at' => '2015-08-07 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 15000,
                    'terbayar' => 12000,
                    'tak_terbayar' => 9000,
                    'created_at' => '2015-08-08 07:14:21',
                    'updated_at' => '2015-08-08 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 7000,
                    'terbayar' => 6000,
                    'tak_terbayar' => 4000,
                    'created_at' => '2015-08-09 07:14:21',
                    'updated_at' => '2015-08-09 06:33:01',
                ),
                array(
                    'group_id' => 1,
                    'click' => 5000,
                    'terbayar' => 4500,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-10 07:14:21',
                    'updated_at' => '2015-08-10 06:33:01',
                ),

                array(
                    'group_id' => 2,
                    'click' => 5000,
                    'terbayar' => 2200,
                    'tak_terbayar' => 1000,
                    'created_at' => '2015-08-01 07:14:21',
                    'updated_at' => '2015-08-01 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 4200,
                    'terbayar' => 2500,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-02 07:14:21',
                    'updated_at' => '2015-08-02 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 5500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-03 07:14:21',
                    'updated_at' => '2015-08-03 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 7000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-04 07:14:21',
                    'updated_at' => '2015-08-04 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 6000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-05 07:14:21',
                    'updated_at' => '2015-08-05 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 4500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-06 07:14:21',
                    'updated_at' => '2015-08-06 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 4000,
                    'terbayar' => 2000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-07 07:14:21',
                    'updated_at' => '2015-08-07 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 15000,
                    'terbayar' => 12000,
                    'tak_terbayar' => 9000,
                    'created_at' => '2015-08-08 07:14:21',
                    'updated_at' => '2015-08-08 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 7000,
                    'terbayar' => 6000,
                    'tak_terbayar' => 4000,
                    'created_at' => '2015-08-09 07:14:21',
                    'updated_at' => '2015-08-09 06:33:01',
                ),
                array(
                    'group_id' => 2,
                    'click' => 5000,
                    'terbayar' => 4500,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-10 07:14:21',
                    'updated_at' => '2015-08-10 06:33:01',
                ),

                array(
                    'group_id' => 3,
                    'click' => 5000,
                    'terbayar' => 2200,
                    'tak_terbayar' => 1000,
                    'created_at' => '2015-08-01 07:14:21',
                    'updated_at' => '2015-08-01 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 4200,
                    'terbayar' => 2500,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-02 07:14:21',
                    'updated_at' => '2015-08-02 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 5500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-03 07:14:21',
                    'updated_at' => '2015-08-03 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 7000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-04 07:14:21',
                    'updated_at' => '2015-08-04 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 6000,
                    'terbayar' => 5000,
                    'tak_terbayar' => 1500,
                    'created_at' => '2015-08-05 07:14:21',
                    'updated_at' => '2015-08-05 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 4500,
                    'terbayar' => 3000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-06 07:14:21',
                    'updated_at' => '2015-08-06 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 4000,
                    'terbayar' => 2000,
                    'tak_terbayar' => 2000,
                    'created_at' => '2015-08-07 07:14:21',
                    'updated_at' => '2015-08-07 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 15000,
                    'terbayar' => 12000,
                    'tak_terbayar' => 9000,
                    'created_at' => '2015-08-08 07:14:21',
                    'updated_at' => '2015-08-08 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 7000,
                    'terbayar' => 6000,
                    'tak_terbayar' => 4000,
                    'created_at' => '2015-08-09 07:14:21',
                    'updated_at' => '2015-08-09 06:33:01',
                ),
                array(
                    'group_id' => 3,
                    'click' => 5000,
                    'terbayar' => 4500,
                    'tak_terbayar' => 3000,
                    'created_at' => '2015-08-10 07:14:21',
                    'updated_at' => '2015-08-10 06:33:01',
                ),
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
        Schema::drop('statistic');
    }
}
