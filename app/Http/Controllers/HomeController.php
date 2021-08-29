<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth()->user()->role_id == 1){
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth()->user()->role_id == 2){
            return redirect()->route('uk_management.test');
        }

        //return view('home');
    }
}
