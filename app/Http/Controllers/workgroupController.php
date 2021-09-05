<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workgroup;

class workgroupController extends Controller
{
    public function Data(){
        $workgro=workgroup::all();
       // dump($new);
       return view('target',
        ['x'=>$workgro]  );  
        }  
}
