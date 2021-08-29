@extends('management.admin.master')

{{-- Title --}}
@section('title','Add UK Management')
{{-- End Title --}}

{{-- Page CSS File --}}
@push('css')
 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/select/select2.min.css')}}">
 <!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-wizard.css')}}">
<!-- END: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">

<style>
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        display: none;
    }
    .content .content-wrapper .content-header-right .btn-icon{
         display: none;
    }

    form{
        width: 100%;
    }
</style>

@endpush
{{-- End : Page CSS File --}}



@section('content')

<div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">UK Management Employee Create</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                <!-- Vertical Wizard -->
                <section class="vertical-wizard">


                    <div class="bs-stepper vertical vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Account Details</span>
                                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Account Type Setting</span>
                                        <span class="bs-stepper-subtitle">Add Account Type Setting</span>
                                    </span>
                                </button>
                            </div>

                            <div class="step" data-target="#social-links-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">4</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </button>
                            </div>
                        </div>


                        <form action="{{route('admin.store.uk_management')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="bs-stepper-content">

                            <div id="account-details-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Details</h5>
                                    <small class="text-muted">Enter Your Account Details.</small>
                                </div>
                                <div class="row">
                                    <!-- users Profile Image -->
                                    <div class="form-group media col-mb-12 col-12">
                                        <img src="{{asset('/img/profile_image.png')}}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                        <div class="media-body mt-50">
                                            <h4>Eleanor Aguilar</h4>
                                            <div class="col-12 d-flex mt-1 px-0">
                                                <label class="btn btn-primary mr-75 mb-0" for="change-picture">
                                                    <span class="d-none d-sm-block">Change</span>
                                                    <input class="form-control" type="file" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" name="profile_image" />
                                                    <span class="d-block d-sm-none">
                                                        <i class="mr-0" data-feather="edit"></i>
                                                    </span>
                                                </label>
                                                <button class="btn btn-outline-secondary d-none d-sm-block">Remove</button>
                                                <button class="btn btn-outline-secondary d-block d-sm-none">
                                                    <i class="mr-0" data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End : users Profile Image -->


                                </div>

                                <div class="row">

                                    {{-- User name --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-username">Username</label>
                                        <input type="text" id="vertical-username" class="form-control  @error('name') is-invalid @enderror" placeholder="johndoe" name="name"  value="{{ old('name') }}" required />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- User name --}}

                                    {{-- User Email --}}
                                    <div class="form-group form-password-toggle col-md-6">
                                           <label class="form-label" for="vertical-email">Email</label>
                                            <input type="email" id="vertical-email" class="form-control @error('email') is-invalid @enderror" placeholder="john.doe@email.com" aria-label="john.doe" name="email" value="{{ old('email') }}" required />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                     {{-- End : User Email --}}
                                </div>
                                <div class="row">
                                     {{-- User Number --}}
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="vertical-confirm-password">Phone Number</label>
                                        <input type="text" id="number" class="form-control @error('number') is-invalid @enderror" placeholder="+8852223232" name="number" value="{{ old('number') }}" required />
                                        @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- End : User Number --}}
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </a>
                                    <a class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </a>
                                </div>
                            </div>
                            <div id="personal-info-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Type Setting</h5>
                                    <small>Enter UK-Management Employee Account Type Setting..</small>
                                </div>
                                <div class="row">

                                    {{-- User Role Type --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-address">Employee Type</label>
                                        <select class="form-control @error('role_id') is-invalid @enderror" id="basicSelect" name="role_id" required>
                                            <option value="">*Select Employee Role*</option>
                                            @foreach ($role as $roles)
                                            <option value="{{$roles->id}}">{{$roles->role_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                    </div>
                                    {{-- User Role Type --}}

                                    {{-- Eployee ID NOI --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-last-name">Eployee ID NO</label>
                                        <input type="text" id="vertical-last-name" class="form-control @error('id_no') is-invalid @enderror" name="id_no" value="{{ $idNoData }}" readonly required/>
                                        @error('id_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- Eployee ID NOI --}}
                                </div>

                                <div class="row">

                                    {{-- Referral Key --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-username">Referral Key</label>
                                        <input type="text" id="vertical-referral-key" class="form-control @error('refference_key') is-invalid @enderror" name="refference_key" placeholder="UKADMIN" value="{{old('refference_key')}}" required/>
                                        @error('refference_key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- Referral Key --}}

                                    <div class="form-group col-md-6">

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </a>
                                    <a class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </a>
                                </div>
                            </div>

                            <div id="social-links-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Address</h5>
                                    <small>Enter Emoloyee Address.</small>
                                </div>
                                <div class="row">

                                    {{-- Country --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-country">Country</label>
                                        <select class="select2 w-100 @error('country_id') is-invalid @enderror" id="vertical-country country_id" name="country_id" required>
                                            <option>*Select Country*</option>
                                            @foreach ($country as $countrys )
                                            <option value="{{$countrys->id}}">{{$countrys->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- Country --}}

                                    {{-- City --}}
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-landmark">City</label>
                                        <select class="select2 w-100 @error('city_id') is-invalid @enderror" id="vertical-country city_id" name="city_id" required>
                                            <option>*Select City*</option>
                                            @foreach ($city as $citys )
                                            <option value="{{$citys->id}}">{{$citys->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- City --}}
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </a>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>




                    </div>

                </section>
                <!-- /Vertical Wizard -->




            </div>
        </div>

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

     <!-- BEGIN: Page JS-->
     <script src="{{asset('/app-assets/js/scripts/pages/app-user-edit.js')}}"></script>
     <script src="{{asset('/app-assets/js/scripts/components/components-navs.js')}}"></script>
     <!-- END: Page JS-->

     @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif



@endpush
{{-- End:Page JS File --}}


