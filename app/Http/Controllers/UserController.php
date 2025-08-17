<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Add this line to import the User model
use App\Models\Bookings; // Add this line to import the Bookings model
use App\Models\WebPage; // Add this line to import the WebPage model
use Illuminate\Support\Facades\Hash; // Import Hash facade
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth

class UserController extends Controller
{
    //
    public function index(){
        $data=User::get();
        return view('AdminDashboard.Users.index',['data'=>$data]);
    }
    public function add(){
        return view('AdminDashboard.Users.addEdit');
    }
    public function save(Request $request){
        $user=new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone_no'),
            //'password'=>Hash::make($request->get('password')),
            'password'=>Hash::make('secret'),
            'user_type'=>$request->get('user_type'),
        ]);
        $user->save();
        return redirect()->route('user');
    }
    public function edit($id){
        $data=User::find($id);
        return view('AdminDashboard.Users.addEdit',['data'=>$data]);
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_no=$request->get('phone_no');
        $user->user_type=$request->get('user_type');
        $user->save();
        return redirect()->route('user');
    }
    public function viewDelete($id){
        return view('AdminDashboard.Users.delete');
    }
    public function delete($id){
        User::where('id',$id)->delete();
        return redirect()->route('user');
    }
    public function getProfile(){
        //dd(123); #ignore
        $data=User::find(Auth::user()->id);
        //dd(Auth::user()->user_type); #ignore
        if(Auth::user()->user_type==1){
            $view='AdminDashboard.Profile.index';
        }
        else{
            $view='UserDashboard.Profile.index';
        }
        // dd($view); #ignore
        return view($view,['data'=>$data]);
    }
    public function saveProfile(Request $request){
        $user=User::find(Auth::user()->id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_no=$request->get('phone_no');
        $user->user_type=$request->get('user_type');
        $user->save();
        return redirect()->route('user.profile.get');
    }
    public function adminDashboard(){
        $data['totalUsers']=0;
        $data['adminUsers']=0;
        $data['clientUsers']=0;
        $data['totalBookings']=0;
        $data['completedBookings']=0;
        $data['totalWebpages']=0;
        $data['activeWebpages']=0;
        $data['totalUsers']=User::count();
        $data['adminUsers']=User::where('user_type',1)->count();
        $data['clientUsers']=User::where('user_type',2)->count();
        $data['totalBookings']=Bookings::count();
        $data['completedBookings']=Bookings::where('status',3)->count();
        $data['totalWebpages']=WebPage::count();
        $data['activeWebpages']=WebPage::where('status',1)->count();
        return view('AdminDashboard.index',['data'=>$data]);
    }
    public function userDashboard(){
        $data['totalBookings']=Bookings::where('user_id',Auth::user()->id)->count();
        $data['completedBookings']=Bookings::where('status',3)->where('user_id',Auth::user()->id)->count();
        return view('UserDashboard.index',['data'=>$data]);
    }
}
