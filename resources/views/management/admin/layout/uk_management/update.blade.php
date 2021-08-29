@extends('management.admin.master')

{{-- Title --}}
@section('title','Update Employee')
{{-- End Title --}}

{{-- Page CSS File --}}
@push('css')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-wizard.css')}}">
<!-- END: Page CSS-->

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/select/select2.min.css')}}">
 <!-- END: Vendor CSS-->

 <style>
     .select2-selection__arrow{
         display: none;
    }
 </style>

@endpush
{{-- End:Page CSS File --}}

@section('content')


<!-- BEGIN: Content-->

    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="app-user-edit">
                <form action="{{route('admin.update_store.uk_management')}}" method="POST">
                    @csrf
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                    <i data-feather="user"></i><span class="d-none d-sm-block">Employee Update Information </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Account Tab starts -->
                            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <!-- users edit media object start -->
                                <div class="media mb-2">
                                    <img src="{{asset($user->profile_image)}}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                    <div class="media-body mt-50">
                                        <h4>{{$user->name}}</h4>
                                        <h5 class="text-info"> {{$user->role->role_name}}</h5>

                                    </div>
                                </div>
                                <!-- users edit media object ends -->
                                <!-- users edit account form start -->
                                <div class="form-validate">
                                    <div class="row">
                                        <h4 class="col-md-12 text-primery">Employee Information</h4>
                                        <div class="col-md-4">
                                            <input type="hidden" class="form-control" placeholder="Username" value="{{$user->id}}" name="user_id" id="user_id" required />
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="{{$user->name}}" name="name" id="name" required />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}" name="email" id="email" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Number</label>
                                                <input type="text" class="form-control" placeholder="Number" value="{{$user->number}}" name="number" id="number" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <h4 class="col-md-12 text-primery">Employee Type Information</h4>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Employee Designation</label>
                                                <select class="select2 w-100" id="vertical-country role_id" name="role_id" required>
                                                    <option class="old_value" value="{{$user->role->id}}">{{$user->role->role_name}}</option>
                                                    @foreach ($role as $roles )
                                                    <option value="{{$roles->id}}">{{$roles->role_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <h4 class="col-md-12 text-primery">Employee Address</h4>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Employee Country</label>
                                                <select class="select2 w-100" id="vertical-country country_id" name="country_id" required>
                                                    <option value="{{$user->country->id}}">{{$user->country->name}}</option>
                                                    @foreach ($country as $countrys )
                                                    <option value="{{$countrys->id}}">{{$countrys->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label for="email">Employee City</label>
                                               <select class="select2 w-100" id="vertical-country city_id" name="city_id" required>
                                                    <option value="{{$user->city->id}}">{{$user->city->name}}</option>
                                                    @foreach ($city as $citys )
                                                    <option value="{{$citys->id}}">{{$citys->name}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                            <a type="reset" class="btn btn-outline-secondary mb-1 mb-sm-0 mr-0 mr-sm-1" href="{{ url()->previous() }}">Back</a>
                                            <button type="submit" class="btn btn-primary ">Update</button>
                                        </div>


                                    </div>
                                </div>
                                <!-- users edit account form ends -->
                            </div>
                            <!-- Account Tab ends -->


                        </div>
                    </div>
                </div>
                </form>
            </section>
            <!-- users edit ends -->

        </div>
    </div>

<!-- END: Content-->


@endsection

{{-- Page JS File --}}
@push('js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{asset('/app-assets/js/scripts/forms/form-wizard.js')}}"></script>
    <script src="{{asset('/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page JS-->
@endpush
{{-- END:Page JS File --}}


