<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth facade
use App\Models\User; // Make sure to import the User model
use Illuminate\Support\Facades\Hash; // Import Hash facade

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(array('email'=>$request->get('email'),'password'=>$request->get('password')))){
            if(Auth::user()->user_type==1){
                return redirect()->route('dashboard.admin');
            }
            elseif(Auth::user()->user_type==2){
                return redirect()->route('dashboard.user');
            }
            else{
                return redirect()->route('login')->with('error','Email Address or Password is Wrong');
            }
        }
    }

    public function signup(){
        return view('auth.register');
    }

    public function createUser(Request $request){
        //dd($request->all()); #ignore
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'phone_no'=>'required',
            'password'=>'required',
            //'confirmpassword'=>'required'
        ]);
        $user=new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone_no'),
            'password'=>Hash::make($request->get('password')),
            'user_type'=>2
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
