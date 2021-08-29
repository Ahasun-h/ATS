@extends('management.admin.master')

{{-- Title --}}
@section('title','View UK Management')
{{-- End Title --}}

{{-- Page CSS File --}}
@push('css')
<style>
    .table-action-btn{
        display: inline-flex;
        grid-column-gap: 5px;
    }
</style>
@endpush
{{-- End:Page CSS File --}}

@section('content')

{{-- All Country Country --}}
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">



    <div class="content-body">
        <section id="basic-datatable">
            <div class="card shadow mb-4">
                <div class="card-header border-bottom p-1" >
                    <div class="head-label">
                        <h6 class="mb-0">View ALL UK Management Employee</h6>
                    </div>
                    <div class="dt-action-buttons text-right">
                        <div class="dt-buttons d-inline-flex">
                            <a href="{{ route('admin.add.uk_management') }}" class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>
                                    <i data-feather='user-plus'></i>
                                    Add New
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                  <div class="table-responsive" style=" overflow-x: clip;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($user as $key => $users)

                       {{-- if Condition use for Check Employee Role.  If role type Is Menager, Then Cheange The Designation Color. --}}
                       @if( $users->role->role_name == 'UK-Manager' )
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{$users->name}}</td>
                        <td class="text-info">{{$users->role->role_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->uniqueIDKey->unique_id_key}}</td>
                        <td class="table-action-btn" >
                            <a title="Print" class="col-6 btn btn-success waves-effect waves-float waves-light" href="{{route('admin.view_detail.uk_management',$users->id)}}">
                                <i data-feather='eye'></i>
                            </a>
                            <a href="{{route('admin.delete.uk_management',$users->id)}}" onclick="return confirm('Are you sure , You want to Delete this Employee ?')" title="Delete" id="delete_button" class="col-6 btn btn-danger waves-effect waves-float waves-light" >
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                      </tr>



                       @else
                       <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{$users->name}}</td>
                        <td class="text-success">{{$users->role->role_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->uniqueIDKey->unique_id_key}}</td>
                        <td class="table-action-btn" >
                            <a class="col-6 btn btn-success waves-effect waves-float waves-light" href="{{route('admin.view_detail.uk_management',$users->id)}}">
                                <i data-feather='eye'></i>
                            </a>
                            <a href="{{route('admin.delete.uk_management',$users->id)}}" onclick="return confirm('Are you sure , You want to Delete this Employee ?')" title="Delete" id="delete_button" class="col-6 btn btn-danger waves-effect waves-float waves-light" >
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                      </tr>






                       @endif

                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
        </section>
    </div>

@endsection

@push('js')
<!-- Page level plugins -->
  <script src="{{ asset('Backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('Backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('Backend/js/demo/datatables-demo.js') }}"></script>



@endpush
