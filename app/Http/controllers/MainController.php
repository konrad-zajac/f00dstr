<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;



class MainController extends Controller
{
	public function home()
	{
		return view('other.home');
	}

	public function about()
	{
		return view('other.about');
	}
		public function contact()
	{
		return view('other.contact');
	}
	public function greet(User $user)
	{
		return view('other.greet',compact('user'));
	}

}
