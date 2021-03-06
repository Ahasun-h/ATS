<?php

namespace App\Http\Controllers\ManagementAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected function redirectTo(){
        if(Auth()->user()->role_id == 1){
            return route('admin.dashboard');
        }
    }

    /**
    * Display the password reset view for the given token.
    *
    * If no token is present, display the link request form.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  string|null  $token
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

}
