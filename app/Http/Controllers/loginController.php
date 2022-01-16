<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;

class loginController extends Controller
{
    public function index() {
    	return view('login.index', [
    		'title' => 'login'
    	]);
    }

    public function authenticate(Request $request) {
    	$validated = $request->validate([
    		'username' => 'required|min:5|max:100',
    		'password' => 'required|min:5'
    	]);

    	if(Auth::attempt($validated)) {
    		$request->session()->regenerate();
    		return redirect()->intended('/dashboard');
    	}

    	return back()->with('loginFail', 'Login has been failed!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
