<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/7/2018
 * Time: 12:36 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends  Controller
{

    public function authenticate(Request $request){

        $password = DB::table('user') ->select('password') -> where('username',$request['username'])->first();
        if(!count($password)){
            return view('loginForm',['message'=>'Incorrect Username']);
        } elseif (!Hash::check($request['password'],$password->password)){
            return view('loginform', ['message'=>'Incorrect Password']);
        } else {
            Session::put('username',DB::table('user')-> where('username',$request['username']) -> value('username'));
            return view('layouts.dashboard');
        }

    }
    public function logout(){
        Session::flush();
        return  view('loginform');
    }
}