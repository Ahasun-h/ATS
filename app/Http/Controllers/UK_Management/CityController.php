<?php

namespace App\Http\Controllers\UK_Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

Use Alert;

use App\Model\Country;
use App\Model\City;
use App\User;

class CityController extends Controller
{
    // Show All City From Table
    public function viewCity(){
        $data['city'] = City::where('status',1)->get();
        $data['country'] = country::where('status',1)->get();
        return view('management.uk_management.layout.city.all_city',$data);
    }

     // Get All Country Name And show with Ajax //
     public function getAllCountry(){
        $country = country::all();
        return response()->json($country);
     }

     // Store New Country Data In Table
    public function storeCity(Request $request){

        $data = Validator::make($request->all(),[
            'name' =>['required','string','min:2'],
            'country_id' => ['required','int'],
        ]);

        if($data->fails()){
            return back()->with('toast_error',$data->messages()->all())->withInput();
        }else{
            $city = new City();
            $city->name = $request->name;
            $city->country_id = $request->country_id;
            $city->status = 1;
            $city->save();
        }
        // Alert::success('Task Complete ', 'Country Name Add successfully');
        return redirect()->route('uk_management.view.city')->with('Task Complete ', 'Country Name Add successfully');
    }

    // Delete Country Form Table
    public function deleteCity($id){
        $city = City::find($id);
        $city->delete();
        return redirect()->route('uk_management.view.city')->with('Task Complete ','Selected City Deleted successfully');
    }
}
