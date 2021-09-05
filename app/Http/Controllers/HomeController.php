<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\P_issue;
use DB;
use App\Models\User;
use App\Models\admin;
use App\Models\individual_target;
use App\Models\r_user;

class HomeController extends Controller
{
    function login(){
        $id = auth()->user()->id;
        $user = User::find($id);

        if($user->role == 'Admin')
        {
            $adminCount = admin::all()->count();
            $individualCount = individual_target::all()->count(); $registeredCount = r_user::all()->count();
            return view("backend.welcomes.welcome_admin", compact('adminCount', 'individualCount', 'registeredCount' ));
         } 
         elseif ($user->role == 'Individual Target')
         {
            
            return view('target');
         }

          elseif ($user->role == 'Registered User') {
           
            
            return view('login');
          }
    }

    function index(){
        $issues = DB::select("select pi_ID,p_issue from  p_issues");
        return view('home',['issues'=>$issues]);
    }

    function formUpload(Request $req){
        

    }
}
