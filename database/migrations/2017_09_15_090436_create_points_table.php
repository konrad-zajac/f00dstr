<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('point_id');
			$table->string('point_name');
            // ->unique()
			$table->string('point_city');
			$table->string('point_address');
			$table->string('point_telephone');
			$table->string('point_opening_hours');
			$table->string('point_closing_hours');
			$table->integer('point_price_result')->nullable();
			$table->integer('point_taste_result')->nullable();
			$table->integer('point_music_result')->nullable();
			$table->integer('point_variety_result')->nullable();
			$table->integer('point_decor_result')->nullable();

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
        Schema::dropIfExists('points');
    }
}
