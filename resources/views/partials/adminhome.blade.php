@extends('admin.welcome')

@section('content')
@if(session('status-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('status-success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<h2 class="mt-5">PENDING APPLICANTS</h2>
<table class="table table-striped mt-5">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Village of Birth</th>
             <th>Village of Chief</th>
              <th>Place of Chief</th>
              <th>Sex</th>
            <th>DOB</th>
            <th>STATUS</th>




            <th colspan="3"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
        <td>{{$user->firstname}}</td>
             <td>{{$user->lastname}}</td>
             <td>{{$user->address}}</td>
             <td>{{$user->birth_village}}</td>
             <td>{{$user->village_chief}}</td>
             <td>{{$user-> birth_place}}</td>
             <td>{{$user-> sex}}</td>
            <td>{{$user->dob}}</td>
            <td>{{$user->statuses->status}}</td>





            <td>
                <a href="{{ url('/admin/show/'.$user->id)}}">Show</a>
            </td>
            <td>
            <a href="#" onclick="event.preventDefault();
            confirm('Are you sure you want to delete') ? document.getElementById('delete-form').submit() : console.log('click Cancel');">Destory</a>
                                <form id="delete-form" action="{{url('/admin/'.$user->id)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#addSubject" id="addSubjectModelBtn">Edit Status</a>
            </td>
                <div class="modal fade" tabindex="-1" role="dialog" id="addSubject">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add STATUS</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" id="createSubjectForm" action="/status/create" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="national_id" id="" value="{{$user->id}}">
                <input type="hidden" name="status_id" id="" value="{{$user->statuses->id}}">


                <div class="modal-body create-modal">
                    <div id="add-section-messages"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="idNumber" class="col-sm-4 col-form-label text-md-right">{{ __('Enter ID Number:') }}</label>
                                <div class="col-sm-8">
                                    <input id="idNumber" type="text" class="form-control @error('idNumber') is-invalid @enderror" name="idNumber" value="{{$user->statuses->id_number}}" autocomplete="idNumber" autofocus>

                                    @error('idNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                   <!-- /row -->
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="processor" class="col-sm-4 col-form-label text-md-right">{{ __('Enter Contact Person:') }}</label>
                                <div class="col-sm-8">
                                    <input id="processor" type="text" class="form-control @error('processor') is-invalid @enderror" name="processor" value="{{$user->statuses->process}}" autocomplete="processor" autofocus>

                                    @error('processor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                   <!-- /row -->
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-4 col-form-label text-md-right">{{ __('Status :') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status" id="status">
                                <option value="">Choose Status</option>
                                <option value="PENDING">PENDING</option>
                                <option value="PROCESSING">PROCESSING</option>
                                <option value="Finished">FINISHED</option>

                            </select>

                            @error('status')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>
                <!-- /modal-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </tr>

       @endforeach
    </tbody>
</table>

@endsection
