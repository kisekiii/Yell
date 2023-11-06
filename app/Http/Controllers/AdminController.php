<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(Request $request){
        $request->validate([
            'email' => 'required|email:dns|max:255|unique:users,email',
            'password' => 'required|min:6|',
        ]);
            $user = Auth::user();

            $login=[
                'email'=>$request->email,
                'password'=>$request->password
            ];
            if(Auth::attempt($login)){
                //echo "sukses"; exit();
                if(Auth::user()->role == 'superadmin'){
                    return redirect('dashboard/superadmin');
                 }elseif(Auth::user()->role == 'admin'){
                    return redirect('dashboard/admin');
                 }elseif(Auth::user()->role == 'user'){
                    return redirect('dashboard/user');
                 }
            }else{
                return redirect('login')->withErrors('EMAIL PASSWORD TIDAK SESUAI')->withInput();
            }
    }
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
