<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class loginController extends Controller
{

    public function index(Request $request){
    $username = $request->input('email');
    $password = $request->input('password');

    $users = users::all();
    $username1 = false;
    $password1 = false;
    foreach($users as $user){
        if($user['email'] ==$username){
            $username1 = true; 
        }}
        if($username1){
            foreach($users as $user){
                if($user['password'] == $password){
                 $password1 = true; 
           } 
        }
}

if($username1 && $password1){
    return view('home');
}else{
    echo"cont loin";
    return view('login');
}
}

}


