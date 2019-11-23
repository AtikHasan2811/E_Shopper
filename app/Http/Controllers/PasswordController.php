<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Illuminate\Support\facades\Auth;


class PasswordController extends Controller
{
    public function index(){
        return view('auth.passwords.passwordchange');

    }

    public function password_update(Request $request){
        $password=Auth::user()->password;  //database er pass
        $oldpass=$request->Oldpass;
        //from er pass
        if(Hash::check($oldpass,$password)){  //from and database er pass jodi mil thake tahole dukbe
                                                //hash used korahoy karon  hash e converd kora thake password ai jonno

            $user=User::find(Auth::id()); //find out korlam user er id
            $user->password=Hash::make($request->password);  //user table e password col e from er password ta hash formate e save korlo
            $user->save();   //save funtion
            Auth::logout(); //auth er building funtion logout er jonno
            return Redirect()->route('login')->with('successMsg','Successfully password change,New log in');
        }else{
            return Redirect()->back()->with('ErrorMsg','Old Password doesnot match');
        }



    }
}
