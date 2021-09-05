<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
use Hash;

use App\Models\ind_target;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $admins = admin::all();
        
        return view('backend.admin.index', compact('users','admins'));
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

        $admin = new admin();
        $admin->user_id = $user->id;
        $admin->phone = $request['phone'];
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin added successfully.');
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
