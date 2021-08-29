<?php

use Facade\FlareClient\View;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentManagerController;
use App\Model\Country;

Route::group(['middleware'=>'Admin','auth'],function(){

    // Dashboard Route's
    Route::get('dashboard','AdminController@index')->name('dashboard');

    // Country Route's
    Route::get('country/view','CountryController@viewCountry')->name('view.country');
    Route::post('country/store','CountryController@storeCountry')->name('store.country');
    Route::get('country/delete/{id}','CountryController@deleteCountry')->name('delete.country');


    // City Route's
    Route::get('city/view','CityController@viewCity')->name('view.city');
    Route::get('city/get_country','CityController@getAllCountry')->name('get.all.city');
    Route::post('city/store','CityController@storeCity')->name('store.city');
    Route::get('city/delete/{id}','CityController@deleteCity')->name('delete.city');

     // UK Management Route's
    Route::get('uk_management/view','UkManagementController@view')->name('view.uk_management');
    Route::get('uk_management/add','UkManagementController@add')->name('add.uk_management');
    Route::post('uk_management/store','UkManagementController@store')->name('store.uk_management');
    Route::get('uk_management/view_detail/{id}','UkManagementController@viewDetail')->name('view_detail.uk_management');
    Route::get('uk_management/update/{id}','UkManagementController@updateView')->name('update_view.uk_management');
    Route::post('uk_management/update/store','UkManagementController@updateStore')->name('update_store.uk_management');
    Route::get('uk_management/delete/{id}','UkManagementController@delete')->name('delete.uk_management');

});



