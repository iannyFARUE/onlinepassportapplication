@extends('users.welcome')

@section('content')
<div class="container d-flex justify-content-center mt-5">
 <div class="container">
        <div class="row">
        <h3>WELCOME TO ZIM FIRST ONLINE ID APPLICATION SYSTEM</h3>
    </div>
        <h2>STEPS</h2>

        <ol type="1">
            <li>Create an account</li>
            <li>Go to the Apply Now  tab</li>
            <li>Enter your information as per birth</li>
            <li>Scan for barcode using the green button </li>
        </ol>

        <div class="row">
            <h2>FAQ</h2>
        </div>
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         FAQ 1 <strong>DO I NEED TO HAVE A FINGER PRINT SCANNER</strong>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Unless you do not have the latest 10th Generation PC from Firdian Technologies which have camera's with ability to scan finger prints by simply waving you hants in font of the camera
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       FAQ 2 <strong>HOW TO COLLECT MY ID </strong>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       Since we are now in the tech Era there is no need to collect ID's inflared signals are pushed to your body on scanning and thats you ID
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          FAQ 3 <strong>WHAT ARE PAYMENTS METHODS USED </strong>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        You can used bitcoins, Zimbocash or any other cryptocurrencies
        <strong>N.B Bond notes are not allowed</strong>
      </div>
    </div>
  </div>
</div>
 </div>
</div>

@endsection
