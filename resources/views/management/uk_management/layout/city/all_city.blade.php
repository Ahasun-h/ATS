@extends('management.uk_management.master')

{{-- Title --}}
@section('title','Country & City')
{{-- End Title --}}

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
                        <h6 class="mb-0">Country's</h6>
                    </div>
                    <div class="dt-action-buttons text-right">
                        <div class="dt-buttons d-inline-flex">
                            <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#addNewCountry">
                                <span>
                                    <i class="far fa-plus-square"></i>
                                    Add New
                                </span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                  <div class="table-responsive" style=" overflow-x: clip;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>City</th>
                          <th>Country Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($city as $key => $citys)
                         <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{$citys->name}}</td>
                           <td>{{$citys->country->name}}</td>
                           <td>
                            <a onclick="return confirm('Are you sure To Confirm This')" title="Print" class="btn btn-danger waves-effect waves-float waves-light" href="{{route('admin.delete.city',$citys->id)}}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                           </td>
                         </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
        </section>
    </div>














 <!-- Add New Country -->
 <div class="modal fade text-left" id="addNewCountry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Add New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('uk_management.store.city')}}" method="POST">
                @csrf

                <div class="col-12 form-group">
                    <label for="countrySelec">Country Select</label>
                    <select class="form-control" id="basicSelect" name="country_id">
                        <option value="">*Select Country*</option>
                        @foreach($country as $countrys)
                        <option value="{{ $countrys->id }}">
                            {{ $countrys->name }}
                        </option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="basicInput">City Name</label>
                        <input type="text" class="form-control" id="basicInput" placeholder="Name" name="name" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<!-- Page level plugins -->
  <script src="{{ asset('Backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('Backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('Backend/js/demo/datatables-demo.js') }}"></script>
@endpush
