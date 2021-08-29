<?php

use Facade\FlareClient\View;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentManagerController;
use App\Model\Country;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'HomeController@index')->name('home');



// Admin Route's
// Route::group(['prefix'=>'Admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
//     Route::get('dashboard','AdminController@index')->name('admin.dashboard');

//     Route::get('test', function () {

//         $user = Auth::user();
//         dd($user->role->id);
//         return view('welcome');
//     });
// });

// Management Auth Routes
Route::group(['as'=>'mgt.', 'prefix'=>'mgt','namespace'=>'ManagementAuth'], function(){

    // login Routes
    Route::get('login','LoginController@showLoginForm')->name('show.login');
    Route::post('login','LoginController@login')->name('process.login');

    // Forget Password Routes
    Route::get('password/reset','ForgetPasswordContoller@showLinkRequestForm')->name('password.request');
    Route::post('password/email','ForgetPasswordContoller@sendResetLinkEmail')->name('password.email');

    // Password Change Routes
    Route::get('password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset','ResetPasswordController@reset')->name('password.update');
});

// Route::group(['as'=>'uk_management.','prefix'=>'UK-Management','middleware'=>['UK_Management','auth'],'namespace'=>'UK_Management'],function(){
//     Route::get('dashboard','UKManagementController@index')->name('dashboard');

// });







