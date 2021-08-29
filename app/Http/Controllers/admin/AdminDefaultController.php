<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\City;

class AdminDefaultController extends Controller
{
    // UK Management City Show Query With Ajax //
    public function getCity(Request $request){
        $country_id = $request->country_id;
        $allCity  = City::where('country_id',$country_id)->get();
        dd($allCity);
        return response()->json($allCity);
    }
}
