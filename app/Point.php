<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
	protected $fillable = [
		'point_name',
		'point_city',
		'point_website',
		'point_city',
		'point_address',
		'point_telephone',
		'point_opening_hours',
		'point_closing_hours',
		'point_price_result',
		'point_taste_result',
		'point_music_result',
		'point_variety_result',
		'point_decor_result'
	];
}
