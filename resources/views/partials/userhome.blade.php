@extends('users.welcome')

@section('content')
@if(session('status-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('status-success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session('status-failure'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{ session('status-failure') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(is_null($nationalID))
<div class="container d-flex justify-content-center">
    <div class="container">
<div class="row  pt-5">
    <h1><strong>THERE ARE NO APPLICATION TO TRACK..</strong>    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Loading..</span>
</div>
<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Loading...</span>
</div></h1>

</div>

<div class="row d-flex justify-content-center">

<div class="pt-5">
    <p>Go to Apply Now ../</p>
    <p class="text-success">For any queries calls us on  .. 0775 774 149 <br>Or email us on iannyfarai@gmail.com</p>

</div>
</div>
</div>
</div>


@endif

@if(!is_null($nationalID))
<div class="container pt-5 d-flex justify-content-center">
 <div class="row">
    <div class="list-group">
        <a href="{{ url('/users/show/'.$nationalID->id)}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">National ID Application </h5>
                <small class="text-muted">{{$nationalID->created_at->diffForHumans()}}</small>
            </div>
            <p class="mb-1">Your application was submitted successfully please check progress by traversing through the menu below</p>
            <small class="text-muted">For any queries visit the Help/Enquiry page</small>
        </a>
           <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Status</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Contact Person</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>

    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active pt-2" id="list-home" role="tabpanel" aria-labelledby="list-home-list"> <h3>The current status is <strong style="border-right:5px solid rgb(214, 73, 82);padding:0px 20px;">{{$nationalID->statuses->status}}</strong> </h3>
    <p>Status was set <i>{{$nationalID->updated_at->diffForHumans()}}</i> by Ian</p>
    </div>
      <div class="tab-pane fade pt-2" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><p>This Application is handled by <strong>{{$nationalID->statuses->process}}</strong></p>
        <h4> For any Enquiries contact on email info@makombe.com</h4>
    </div>
      <div class="tab-pane fade pt-2" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Received messages sent...
          <div class="spinner-border text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
      </div>

    </div>
  </div>
</div>
    </div>

</div>


</div>

@endif

@endsection
