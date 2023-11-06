<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=> 'required'
        ],[
            'email.required'=>'email wajib di isi',
            'password.required'=>'email wajib di isi'
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //echo "sukses"; exit();
         if(Auth::user()->role == 'superadmin'){
            return redirect('dashboard');
         }elseif(Auth::user()->role == 'admin'){
            return redirect('dashboard');
         }elseif(Auth::user()->role == 'user'){
            return redirect('dashboard');
         }
        }else{
            return redirect('login')->withErrors('EMAIL PASSWORD TIDAK SESUAI')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('login');

    }
    public function register(){
        return view('register');
    }
    public function register_proses(Request $request){
 //      dd($request->all());
     $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|max:255|unique:users,email',
        'password' => 'required|min:6|',
        ],[
            'name.required' =>'nama wajib idisi',
            'email.required'=>'email wajib di isi',
            'password.required'=>'pass wajib di isi min6'
 //       ]);
       ]);
       $data['name']        = $request->name;
       $data['email']       = $request->email;
       $data['password']    = Hash::make($request->password);
        User::create($data);

        $login=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($login)){
            //echo "sukses"; exit();
         if(Auth::user()->role == 'superadmin'){
            return redirect('dashboard');
         }elseif(Auth::user()->role == 'admin'){
            return redirect('dashboard');
         }elseif(Auth::user()->role == 'user'){
            return redirect('dashboard');
         }
        }else{
            return redirect('login')->withErrors('EMAIL PASSWORD TIDAK SESUAI')->withInput();
        }
    }
}
