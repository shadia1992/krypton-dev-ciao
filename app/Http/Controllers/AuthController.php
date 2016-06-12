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
        $user = User::where('name', $name)->first();
        
        // Check user exists
        if (!isset($user)) {
            return response('Bad Request', 400);
        }
        // Check password
       if (!Hash::check($password,$user->password)) {
           return response('Bad Request', 400);
       }
       // Auth persistance
       Session::put('id', $user->id);
       return response('OK', 200);
    }

    public function logout()
    {
        Session::forget('id');
        return response('OK', 200);
    }

}
