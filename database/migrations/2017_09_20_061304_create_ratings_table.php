<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('rating_id');
			$table->integer('user_id');
			$table->integer('point_id');

			$table->integer('rating_of_price');
			$table->integer('rating_of_taste');
			$table->integer('rating_of_music');
			$table->integer('rating_of_variety');
			$table->integer('rating_of_decor');

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
        Schema::dropIfExists('ratings');
    }
}
