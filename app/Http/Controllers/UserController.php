<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function AddUser(){
        return view('/admin.user.add-user');
    }
    public function saveUserInfo(Request $request) {
        $this->validate($request, [
            'name'=>'required|regex:/^[\pL\s\-]+$/u|max:30',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|alpha_num|min:6',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required',
        ]);

      $user= new User();
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=bcrypt($request->password);
      $user->phone_number=$request->phone_number;
      $user->address=$request->address;
      $user->save();
      return redirect('/add-user')->with('message','User Info Save Successfully ');
    }
    public function manageUserInfo(){
       $users=User::all();
       return view('admin.user.manage-user',['users'=>$users]);

    }
    public function deleteUserInfo($id){
       $user=User::find($id);
       $user->delete();
        return redirect('/manage-user')->with('message','User Info Delete Successfully');
    }
}
