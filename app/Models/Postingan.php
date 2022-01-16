<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan 
{
    private static $post_quote = 
	[
		[
		"title" => "coba pertama",
		"name" => "Satria Bagus"
		],
		[
		"title" => "coba kedua",
		"name" => "Bambang"
		],
		[
		"title" => "coba ketiga",
		"name" => "Ramadani"
		]
	];

	public function all() {
		return collect(self::$post_quote);
	}
}
