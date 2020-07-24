@extends('users.welcome')

@section('content')
<div class="card mt-5 p-2" id="">
        <div class="card-block">
        <h4 class="text-center mb-3"><b>ID INFORMATION</b></h4>
        <div class="row bg-gradient-primary pt-2 my-2">
            <div class="col-md-4">
                <h5 class="details text-success"><b>Sex</b></h5>   <span class="text-default">{{$nationalID->sex}}</span>

            </div>
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Firstname</b></h5>    <span class="text-default">{{$nationalID->firstname}}</span>

            </div>

            <div class="col-md-4">
                <h5 class="details text-danger"><b>Lastname</b></h5>    <span class="text-default">{{$nationalID->lastname}}</span>

            </div>
        </div>
            <div class="row  pt-2 my-2">
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Place of Birth</b></h5>   {{$nationalID->birth_place}}

            </div>
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Village of Birth</b></h5>   {{$nationalID->birth_village}}

            </div>

            <div class="col-md-4">
                <h5 class="details text-danger"><b>Village Chief</b></h5>   {{$nationalID->village_chief}}

            </div>
        </div>
             <div class="row bg-gradient-primary my-2">
             <div class="col-md-4">
                <h5 class="details text-danger"><b>DOB</b></h5>   <span class="text-default">{{$nationalID->dob}}</span>

            </div>
            <div class="col-md-4">
                <h5 class="details text-danger"><b>STATUS</b></h5>   <span class="text-default">{{$nationalID->statuses->status}}</span>

            </div>
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Email</b></h5>   <span class="text-default">{{$nationalID->user->email}}</span>

            </div>


        </div>


            <div class="row  pt-2">
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Person Assigned</b></h5>   <span class="text-default">{{$nationalID->statuses->process ?? 'N/A'}}</span>

            </div>
            <div class="col-md-4">
                <h5 class="details text-danger"><b>Your Assigned ID Number</b></h5>   <span class="text-default">{{$nationalID->statuses->id_number ?? 'N/A'}}</span>

            </div>

            <div class="col-md-4">
                <h5 class="details text-danger"><b>Last Edited</b></h5>   <span class="text-default">{{$nationalID->updated_at->diffForHumans().' by Admin'}}</span>

            </div>
        </div>
        </div>



        </div>
</div>

@endsection
