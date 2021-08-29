<?php

namespace App\Http\Controllers\UK_Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UKManagementController extends Controller
{
    public function index(){
        return view('management.uk_management.layout.dashbord');
    }
}
