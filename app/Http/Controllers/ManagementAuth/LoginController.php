<?php

namespace App\Http\Controllers\ManagementAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
    * Show the application's login form.
    *
    * @return \Illuminate\View\View
    */
    public function showLoginForm(){
        return view('management.auth.login');
    }


    /**
    * Where to redirect users after login.
    *
    * @var string
    */

    protected function redirectTo(){
        // if(Auth()->user()->role_id == 1){
        //     redirect()->route('admin.dashboard');
        // }elseif(Auth()->user()->role_id == 2 or Auth()->user()->role_id == 3){
        //     redirect()->route('uk_management.dashboard');
        // }

        if(Auth()->user()->role_id == 1){
            redirect()->route('admin.dashboard');
        }elseif(Auth()->user()->role_id == 2){
            redirect()->route('uk_management.dashboard');
        }elseif(Auth()->user()->role_id == 3){
            redirect()->route('uk_management.dashboard');
        }
    }

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
