<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class quoteController extends Controller
{
    public function index() {

    	return view('quotes', [
		"posts" => Post::with(['user'])->latest()->search()->paginate(6)->withQueryString()
		]);
    }
}
