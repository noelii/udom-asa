<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
Use \Carbon\Carbon; 
use App\Models\User;
use App\Models\r_user;

class ruserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $rusers = r_user::all();
        
        return view('backend.ruser.index', compact('users','rusers'));
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

        $ruser = new r_user();
        $todays_date = Carbon::now('Africa/Dar_es_Salaam');
        $todays_time = Carbon::now('Africa/Dar_es_Salaam');

        $ruser->user_id = $user->id;
        $ruser->regDate = $todays_date;
        $ruser->regTime = $todays_time;
        
        $ruser->phone = $request['phone'];
        $ruser->status = $request['status'];
        
        $ruser->save();

        return redirect()->route('ruser.index')->with('success', 'Registered User added successfully.');
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
