<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_loginController extends Controller
{
    
    public function admin_login()
    {
        return view('admin.admin_login');
    }
}
