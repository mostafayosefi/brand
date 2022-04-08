<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SslController extends Controller
{

    public function index(){
        return view('custome.ssl.index' );
    }
    public function create(){
        return view('custome.ssl.index' );
    }
}
