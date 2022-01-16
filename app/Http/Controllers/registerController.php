<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index() {
    	return view('register.index', [
    		'title' => 'register'
    	]);
    }

    public function store(Request $request) {
    	$validatedData = $request->validate([
    		'name' => 'required|max:50',
    		'email' => 'required|email|unique:users',
    		'username' => 'required|unique:users|min:5|max:100',
    		'password' => 'required|min:5|max:200'
    	]);

    	$validatedData['password'] = bcrypt($validatedData['password']);

    	User::create($validatedData);

    	return redirect('/login')->with('success', 'Registration successfully! Please login');
    }
}
