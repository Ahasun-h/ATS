<?php

use Facade\FlareClient\View;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentManagerController;
use App\Model\Country;

Route::group(['middleware'=>'UK_Manager','auth'],function(){

    // Dashboard Route's
    Route::get('dashboard','UKManagementController@index')->name('dashboard');

    // Country Route's
    Route::get('country/view','CountryController@viewCountry')->name('view.country');
    Route::post('country/store','CountryController@storeCountry')->name('store.country');
    Route::get('country/delete/{id}','CountryController@deleteCountry')->name('delete.country');

    // City Route's
    Route::get('city/view','CityController@viewCity')->name('view.city');
    Route::get('city/get_country','CityController@getAllCountry')->name('get.all.city');
    Route::post('city/store','CityController@storeCity')->name('store.city');
    Route::get('city/delete/{id}','CityController@deleteCity')->name('delete.city');

});
