<?php

namespace App\Http\Controllers\Api\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

 public function test(){



    $user = User::create([
        'name' => 'yyy',
        'username' => 'ma8na6',
        'email' => '168user@gmail.com',
        'password'=> Hash::make('123456'),
    ]);

    $token = $user->createToken('LaravelAuthApp')->accessToken;



/*
    if(!Auth::attempt(array('email' => 'user@gmail.com', 'password' => '123456'))){
           return  response([
                'message' => 'invalid login info'
            ]);
        }
        else{
            // $accessToken = auth()->user()->createToken('authToken')->accessToken;

             return response([
                'user' => Auth::user(),
                'accessToken' => '2'
            ]);
        } */

 }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if(!Auth::attempt($login)){
           return  response([
                'message' => 'invalid login info'
            ]);
        }
        else{

            $accessToken = Auth::user()->createToken('authToken')->accessToken;
            return response([
                'user' => Auth::user(),
                'accessToken' => $accessToken
            ]);
        }
        }




}
