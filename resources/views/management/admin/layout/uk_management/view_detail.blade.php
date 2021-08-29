@extends('management.admin.master')

{{-- Title --}}
@section('title','View UK Management')
{{-- End Title --}}

{{-- Page CSS File --}}
@push('css')

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
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                    <i data-feather="user"></i><span class="d-none d-sm-block">Employee Detail Information </span>
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
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="{{$user->name}}" name="username" id="username" readonly />
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
                                                <input type="text" class="form-control" placeholder="Number" value="{{$user->number}}" name="number" id="number" readonly />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Employee Joining Date</label>
                                                <input type="text" class="form-control" placeholder="Employee Joining Date" value="{{$user->created_at}}" name="employee_joining_date" id="employee_joining_date" readonly />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <h4 class="col-md-12 text-primery">Employee Type Information</h4>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Employee Designation</label>
                                                <input type="text" class="form-control" placeholder="Employee Designation" value="{{$user->role->role_name}}" id="employee_designation" readonly />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Employee ID NO</label>
                                                <input type="text" class="form-control" value="{{$user->uniqueIDKey->id_no}}" placeholder="Employee ID NO" id="employee_id_no" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Reference Key</label>
                                                <input type="text" class="form-control" placeholder="Reference Key" value="{{$user->uniqueIDKey->unique_id_key}}" name="reference_key" readonly />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <h4 class="col-md-12 text-primery">Employee Address</h4>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Employee Country</label>
                                                <input type="text" class="form-control" placeholder="country" value="{{$user->country->name}}" id="country" readonly />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Employee City</label>
                                                <input type="text" class="form-control" placeholder="City" value="{{$user->city->name}}" id="city" readonly/>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                            <a type="reset" class="btn btn-outline-secondary mb-1 mb-sm-0 mr-0 mr-sm-1" href="{{ url()->previous() }}">Back</a>
                                            <a href="{{route('admin.update_view.uk_management',$user->id)}}" type="submit" class="btn btn-primary ">Update</a>
                                        </div>


                                    </div>
                                </div>
                                <!-- users edit account form ends -->
                            </div>
                            <!-- Account Tab ends -->


                        </div>
                    </div>
                </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>

<!-- END: Content-->


@endsection

{{-- Page JS File --}}
@push('js')

@endpush
{{-- END:Page JS File --}}


