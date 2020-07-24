@extends('users.welcome')

@section('content')
<div class="container py-5">
<form method="post" id="createNationalID" action="{{route('user.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="fname" class="col-sm-4 col-form-label text-md-right">{{ __('First Name:') }}</label>
                    <div class="col-sm-8">
                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"  autocomplete="fname" autofocus>

                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name:') }}</label>
                    <div class="col-sm-8">
                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}"  autocomplete="lname" autofocus>

                        @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                        <label for="dob" class="col-sm-4 col-form-label text-md-right">{{ __('DOB:') }}</label>
                        <div class="col-sm-8">
                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}"  autocomplete="lname" autofocus>

                            @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                <div class="form-group row">
                        <label for="sex" class="col-sm-4 col-form-label text-md-right">{{ __('Sex :') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="sex" id="sex">
                                    <option value=" ">---Select an gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                            @error('sex')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                </div>

            <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">{{ __('Address:') }}</label>
                    <div class="col-sm-8">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>

               <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right"></label>
                    <div class="col-sm-8">
                       <button type="submit" class="btn btn-outline-primary btn-block">Save Changes</button>
                    </div>
            </div>

         </div>
                        <!-- /col-md-6 -->
        <div class="col-md-6">

            <div class="form-group row">
                <label for="birth_place" class="col-sm-4 col-form-label text-md-right">{{ __('Place of Birth:') }}</label>
                <div class="col-sm-8">
                    <input id="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" value="{{ old('birth_place') }}"  autocomplete="birth_place" autofocus>

                    @error('birth_place')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birth_village" class="col-sm-4 col-form-label text-md-right">{{ __('Village of Birth:') }}</label>
                <div class="col-sm-8">
                    <input id="birth_village" type="text" class="form-control @error('birth_village') is-invalid @enderror" name="birth_village" value="{{ old('birth_village') }}"  autocomplete="birth_village" autofocus>

                    @error('birth_village')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="village_chief" class="col-sm-4 col-form-label text-md-right">{{ __('Village Chief:') }}</label>
                <div class="col-sm-8">
                    <input id="village_chief" type="text" class="form-control @error('village_chief') is-invalid @enderror" name="village_chief" value="{{ old('village_chief') }}"  autocomplete="village_chief" autofocus>

                    @error('village_chief')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="finger_print" class="col-sm-4 col-form-label text-md-right">{{ __('Biometric Scan:') }}</label>
                <div class="col-sm-8">
                    <input id="finger_print" type="button" class="btn btn-outline-danger btn-block"
                     value="Click to Scan Biometrics"
                     onclick="document.getElementById('barcode').style.display='block'">
                    <h3 style="display: none"  id="barcode">Oooops No Bar Code Scanner connected.....
                    <span class="spinner-border text-danger"></span>
                    </h3>

                </div>
            </div>

        </div>
                            <!-- /col-md-4 -->
    </div>
               <!-- /row -->
    </form>
</div>

@endsection
