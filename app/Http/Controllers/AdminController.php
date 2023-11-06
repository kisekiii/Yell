<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function superadmin(){
        return view('dashboard.superadmin');
      }
    function admin(){
        return view('dashboard.admin');
      }
    function user(){
        return view('dashboard.dashboard');
      }
}
