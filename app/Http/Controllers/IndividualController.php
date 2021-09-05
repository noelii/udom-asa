<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\individual_target;
use Hash;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $individuals = individual_target::all();
        
        return view('backend.individual.index', compact('users','individuals'));
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
        $validatedData = $request->validate([
        
            'email' => 'required',
        ]);

        $fname = ucwords($request['firstName']);
        $mname = ucwords($request['middleName']);
        $lname = ucwords($request['lastName']);
        $passcode = strtoupper($request['lastName']);

        $user = new User();
        $user->firstName = $fname;
        $user->middleName = $mname;
        $user->lastName = $lname;
        $user->email = $request['email'];
        $user->role = $request['role'];
        
        $user->password = Hash::make($passcode);
        $user->save();

        $individual = new individual_target();
        $individual->user_id = $user->id;
        $individual->target_desc = $request['target_desc'];
        $individual->office_location = $request['office_location'];
        $individual->phone = $request['phone'];
        
        $individual->save();

        return redirect()->route('individual.index')->with('success', 'Individual Target added successfully.');
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
    public function destroy($id)
    {
        //
    }
}
