<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord()
    {
        return view('admin.admin_dashbord');
    }

    public function login(){
        return view ('admin.admin_login');
    }
}
