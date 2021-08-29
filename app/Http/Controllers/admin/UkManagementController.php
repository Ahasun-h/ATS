<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\ManagementUniqueIDkey;
use App\Model\Country;
use App\Role;
use App\Model\City;
use App\User;

use Illuminate\Support\Facades\Hash;

use DB;
use Auth;

use Validator;
use RealRashid\SweetAlert\Facades\Alert;


class UkManagementController extends Controller
{
    // View All Active UK MANAGEMENT Employee //
    public function view(){
        $roleType = [2,3];
        $data['user'] = User::whereIN('role_id',$roleType)->where('user_status','1')->get();
        return view('management.admin.layout.uk_management.view',$data);
    }

    // Add UK Management Employee //
    public function add(){
        $id_no = ManagementUniqueIDkey::orderBy('id','desc')->first();
    	if($id_no == null){
    		$firstIdNo = '1121';
    		$data['IdNo']  =  $firstIdNo+1;
    	} else{
    		$idNoCheck = ManagementUniqueIDkey::orderBy('id','desc')->first()->id_no;
    		$data['idNoData'] = $idNoCheck+1;
    	}
        $data['country'] = Country::where('status','1')->get();
        $data['role'] = Role::where('group_name','UK_MANAGEMENT')->get();

        // This Code For Temporary Problem, Cause AJUX Not Working //
        $data['city'] = City::where('status','1')->get();

        return view('management.admin.layout.uk_management.add',$data);
    }



    // Store New UK Management User
    public function store(Request $request){

        $data = Validator::make($request->all(), [
            'name' =>['required','string','min:4'],
            'email'=> ['required','email','min:4','unique:users'],
            'number'=> ['required'],
            'role_id'=> ['required'],
            'id_no'=> ['required'],
            'refference_key'=> ['required','string','min:4'],
            'country_id'=> ['required'],
            'city_id'=> ['required'],
            'profile_image'=> ['image','mimes:jpg,jpeg,bmp,svg,png','max:5000'],

        ]);

        if($data->fails()){
            toast($data->messages()->all(),'error');
            return redirect()->back();
        }else{
            // Check UK Manager Is Created or Not //
            if($request->role_id == 2){
                $ukAdminDirector = User::where('role_id','2')->where('user_status','1')->get();
                if($ukAdminDirector == null){
                    // Store Data In Management Unique IDkey Table //
                    $managementUniqueIDkey   = new ManagementUniqueIDkey();
                    $managementUniqueIDkey->id_no          = $request->id_no;
                    $managementUniqueIDkey->refference_key = $request->refference_key;
                    $managementUniqueIDkey->unique_id_key  = $request->refference_key.$request->id_no;
                    $managementUniqueIDkey->status         = '1';
                    $managementUniqueIDkey->save();

                    // Store Data In User Table
                    $user = new User();
                    $user->name = $request->name;
                    $user->role_id = $request->role_id;
                    $user->email  = $request->email;
                    $user->password = Hash::make('php123@AA');
                    $user->number = $request->number;
                    $user->country_id = $request->country_id;
                    $user->city_id = $request->city_id;
                    $user->unique_key_id =  $managementUniqueIDkey->id;
                    if(request()->has('profile_image')){
                        $profilePhotoUploaded = request()->file('profile_image');
                        $profilePhotoName = time().'.'.$profilePhotoUploaded->getClientOriginalExtension()  ;
                        $profilePhotoPath = public_path('/img/');
                        $profilePhotoUploaded ->move($profilePhotoPath,$profilePhotoName);

                        $user->profile_image = '/img/'.$profilePhotoName;
                    }else{

                    }
                    $user->save();
                    alert()->success('Add Sucessfully ','New Employee Added Successfully !');
                    return redirect()->route('admin.view.uk_management');
                }else{
                    toast('Alrady A UK-Manager Is Employeed in there. So You can,t Create new One.','error');
                    return back();
                }

            }else{
                // Store Data In Management Unique IDkey Table //
                $managementUniqueIDkey   = new ManagementUniqueIDkey();
                $managementUniqueIDkey->id_no          = $request->id_no;
                $managementUniqueIDkey->refference_key = $request->refference_key;
                $managementUniqueIDkey->unique_id_key  = $request->refference_key.$request->id_no;
                $managementUniqueIDkey->status         = '1';
                $managementUniqueIDkey->save();

                // Store Data In User Table
                $user = new User();
                $user->name = $request->name;
                $user->role_id = $request->role_id;
                $user->email  = $request->email;
                $user->password = Hash::make('php123@AA');
                $user->number = $request->number;
                $user->country_id = $request->country_id;
                $user->city_id = $request->city_id;
                $user->unique_key_id =  $managementUniqueIDkey->id;
                if(request()->has('profile_image')){
                    $profilePhotoUploaded = request()->file('profile_image');
                    $profilePhotoName = time().'.'.$profilePhotoUploaded->getClientOriginalExtension()  ;
                    $profilePhotoPath = public_path('/img/');
                    $profilePhotoUploaded ->move($profilePhotoPath,$profilePhotoName);
                    $user->profile_image = '/img/'.$profilePhotoName;
                }else{

                }
                $user->save();
                alert()->success('Add Sucessfully ','New Employee Added Successfully !');
                return redirect()->route('admin.view.uk_management');
            }

        }
    }

    // View Employee Detail
    public function viewDetail($id){
        $user = User::where('id',$id)->first();
        return view('management.admin.layout.uk_management.view_detail',compact('user'));
    }

    // Update Employee
    public function updateView($id){

        $user = User::where('id',$id)->first();
        $data['country'] = Country::where('status','1')->get();
        $data['role'] = Role::where('group_name','UK_MANAGEMENT')->get();

        // This Code For Temporary Problem, Cause AJUX Not Working //
        $data['city'] = City::where('status','1')->get();
        return view('management.admin.layout.uk_management.update',$data,compact('user'));
    }

    // Update Store Employee
    public function updateStore(Request $request){
        $data = Validator::make($request->all(), [
            'name' =>['required','string','min:4'],
            'number'=> ['required'],
            'role_id'=> ['required'],
            'country_id'=> ['required'],
            'city_id'=> ['required'],
            'profile_image'=> ['image','mimes:jpg,jpeg,bmp,svg,png','max:5000'],
        ]);

        if($data->fails()){
            toast($data->messages()->all(),'error');
            return redirect()->back();
        }else{
            // check Employee Role is UK-Manager.
            if($request->role_id == 2){
                // If There Alrady Have A UK-Manager Then Give Notification to User
                $checkUKManager = User::where('role_id','2')->where('user_status','1')->get();
                if($checkUKManager == null){
                    // Update Data In User Table //
                    $user = User::find($request->user_id);
                    $user->name  = $request->name;
                    $user->email  = $request->email;
                    $user->number  = $request->number;
                    $user->country_id  = $request->country_id;
                    $user->city_id  = $request->city_id;
                    $user->role_id  = $request->role_id;
                    $user->save();
                    alert()->success('Update Sucessfully ','Selected Employee Information Updated Sucessfully !');
                return redirect()->route('admin.view.uk_management');
                }else{
                    toast('Alrady A UK-Manager Is Employeed in there. So You can,t Create new One.','error');
                    return back();
                }
            }else{
                // Update Data In User Table //
                $user = User::find($request->user_id);
                $user->name  = $request->name;
                $user->email  = $request->email;
                $user->number  = $request->number;
                $user->country_id  = $request->country_id;
                $user->city_id  = $request->city_id;
                $user->role_id  = $request->role_id;
                $user->save();

                alert()->success('Update Sucessfully ','Selected Employee Information Updated Sucessfully !');
                return redirect()->route('admin.view.uk_management');
            }
        }
    }


    // Deactivate the employee
    public function delete($id){

        $user = User::where('id',$id)->first();
        $uniqueKeyID = ManagementUniqueIDkey::where('id',$user->unique_key_id)->first();

        $user->user_status = '0';
        $uniqueKeyID->status = '0';

        $user->save();
        $uniqueKeyID->save();

        alert()->error('Deleted Successfully','Selected Employee Deleted Successfully !');
        return redirect()->back();

    }












}
