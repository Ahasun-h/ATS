<?php

namespace App\Http\Controllers\ManagementAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgetPasswordContoller extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
    * Display the form to request a password reset link.
    *
    * @return \Illuminate\View\View
    */
    public function showLinkRequestForm()
    {
        return view('management.auth.passwords.email');
    }

}
