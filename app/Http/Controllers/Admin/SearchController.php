<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webservice;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SearchController extends Controller
{


    public function index(){
        $searchs= Webservice::orderBy('id', 'desc')->get();
        return view('admin.search.index' , compact(['searchs'  ]));
    }

 


}
