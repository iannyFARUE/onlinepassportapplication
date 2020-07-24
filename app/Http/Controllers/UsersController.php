<?php

namespace App\Http\Controllers;

use App\NationalID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{



    public function __construct()
    {
        $this->middleware('role:user|superadministrator');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationalID = \App\User::find(Auth::id())->nationalID;
        // dd($nationalID);
        return view('partials.userhome', compact('nationalID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $data = $request->validate(
            [
                'fname' => ['required', 'string', 'max:255'],
                'lname' => ['required', 'string', 'max:255'],
                'dob' => 'required',
                'sex' => '',
                'address' => 'required',
                'birth_place' => 'required',
                'birth_village' => 'required',
                'village_chief' => 'required',
            ]
        );

        $nationalID = \App\User::find(Auth::id())->nationalID;

        if ($nationalID === null) {
            $national = \App\NationalID::create([
                'firstname' => $data['fname'],
                'lastname' => $data['lname'],
                'sex' => $data['sex'],
                'address' => $data['address'],
                'dob' => $data['dob'],
                'birth_place' => $data['birth_place'],
                'birth_village' => $data['birth_village'],
                'village_chief' => $data['village_chief'],
                'user_id' => Auth::id()
            ]);

            \App\Status::create([

                'id_number' => '',
                'national_id' => $national->id,
                'process' => '',
            ]);



            return redirect('/users')->with('status-success', 'Application was successful');
        } else {

            return redirect('/users')->with('status-failure', 'Application failed because of pending application');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nationalID = NationalID::find($id);
        return view('users.show', compact('nationalID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function help()
    {

        return view('users.help');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
