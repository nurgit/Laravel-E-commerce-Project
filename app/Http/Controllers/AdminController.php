<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
      return view('admin.admin_login');
    }

    public function dashbord(){
      return View('admin.dashbord');
    }
}
