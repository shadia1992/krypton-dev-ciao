<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Session;
use Request;

class AuthController extends Controller
{

    public function login()
    {
        $password = Request::input('password', '');
        $name = Request::input('name', '');
        $user = User::where("name", $name)->first();
        // Check user exists
        if (!isset($user)) {
            return 'login failed, user existe pas ';
        }
        // Check password
       if (!Hash::check($password,$user->password)) {
           return 'login failed, pas le bon mot de passe';
       }
       // Auth persistance
       Session::put('id', $user->id);
       return 'login successful';
    }

    public function logout()
    {
        Session::forget('id');
        return 'logout successful';
    }

}
