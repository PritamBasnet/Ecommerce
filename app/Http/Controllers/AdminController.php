<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    // Register page
    public function registerPage()
    {
        $check = DB::table('admins')->count();
        if ($check == 0)
        {
            return view('backend.auth.admin.register');
        }
        else
        {
            return view('backend.auth.user.register');
        }
    }

    // Login page
    public function loginPage()
    {
        return view('backend.auth.user.login');
    }


    // Admin Register
    public function adminRegister(Request $req)
    {

    }
     // user Admin Register
     public function userAdminRegister(Request $req)
     {
        
     }
}
