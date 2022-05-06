<?php

namespace App\Http\Controllers\Index;

use App\Models\Faq;
use App\Models\Setting;
use App\Models\Txtdese;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyRequest;
use App\Models\Requestbrand;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TrackingController extends Controller
{




    public function brand(){
        $txtdese= Txtdese::find(6);
        $tracking=Requestbrand::where('random' , '=' , Session::get('random'))->first();
        return view('index.brand.tracking.brand.index' , compact([  'txtdese'  , 'tracking' ]));
    }

    public function company(){
        $txtdese= Txtdese::find(7);
        $tracking=CompanyRequest::where('random' , '=' , Session::get('random'))->first();
        return view('index.brand.tracking.company.index' , compact([  'txtdese'  , 'tracking' ]));
    }

    public function tracking_result(Request $request){

        if($request->mymodel=='requestbrand'){
            $tracking=Requestbrand::where('random' , '=' ,$request->random)->first();
        }

        if($request->mymodel=='requestcompany'){
            $tracking=CompanyRequest::where('random' , '=' ,$request->random)->first();
        }


        if($tracking){
        Alert::success('با موفقیت پیدا شد', 'استعلام جدید باموفقیت پیدا شد');
            return back()->with([  'random' => $request->random]);
        }else{
            Alert::error('کدپیگیری ثبت نشده است      ', 'متاسفانه کد پیگیری ثبت نشده است');
            return back()->with([  'random' => $request->random]);
        }

        }










}
