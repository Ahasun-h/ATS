<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

Use Alert;

use App\Model\Country;
use App\User;

class CountryController extends Controller
{
    // Show All Country From Table
    public function viewCountry(){
        $data['country'] = Country::where('status',1)->get();
        return view('management.admin.layout.country.all_country',$data);
    }

    // Store New Country Data In Table
    public function storeCountry(Request $request){

        $data = Validator::make($request->all(),[
            'name' =>['required','string','min:2'],
        ]);

        if($data->fails()){
            return back()->with('toast_error',$data->messages()->all())->withInput();
        }else{
            $country = new Country();
            $country->name = $request->name;
            $country->status = 1;
            $result =  $country->save();
        }


        // Alert::success('Task Complete ', 'Country Name Add successfully');
        return redirect()->route('admin.view.country')->with('Task Complete ', 'Country Name Add successfully');
    }

    // Delete Country Form Table
    public function deleteCountry($id){
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('admin.view.country')->with('Task Complete ','Selected Country Deleted successfully');
    }

}
