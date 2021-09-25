<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
     {
  return view("admin/login");   
     }
      public function signup()
     {
        return view('admin/signup');
     }
     public function forgot()
     {
         
        return view('admin/forgot');
     }
}
