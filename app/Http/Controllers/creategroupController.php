<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workgroup;
class creategroupController extends Controller
{
    public function creategroup(Request $request){
        $workgrou=new workgroup();
        $workgrou->groupName= $request->groupName;
        $workgrou->office_location= $request->office_location;
        $workgrou->email= $request->email;
        $workgrou->phone= $request->phone;
        $workgrou->save();
        return redirect('/targeti');

}

}