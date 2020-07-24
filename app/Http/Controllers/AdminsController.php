<?php

namespace App\Http\Controllers;

use App\NationalID;
use App\Status;
use Illuminate\Http\Request;


class AdminsController extends Controller
{



    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = NationalID::all();
        // dd($users);
        return view('partials.adminhome', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.show', compact('nationalID'));
    }

    public function status(Request $request)
    {

        $status = Status::find($request->input('status_id'));
        $data = request()->validate([
            'idNumber' => 'required',
            'processor' => 'required',
            'status' => 'required',
            'national_id' => ''

        ]);

        $status->id_number = $data['idNumber'];
        $status->national_id = $data['national_id'];
        $status->process = $data['processor'];
        $status->status = $data['status'];
        $status->save();

        return redirect('/admin')->with('status-success', 'Status was updated sucessfully');
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
    public function destroy(NationalID $user)
    {
        //
        // dd($user);
        $user->delete();
        return redirect('/admin')->with('status-success', 'Deleted sucessfully');
    }
}
