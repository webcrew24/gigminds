<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		if (Auth::guest()) {
			return view('index-public');
		}else{
			if(Auth::user()->roles[0]->pivot->role_id == 1){
				return view('index-super-admin');
			}
			return view('index-private');
		}
    }
}
