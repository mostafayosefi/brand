<?php

namespace App\Http\Controllers\Index;

use App\Models\Faq;
use App\Models\Setting;
use App\Models\Txtdese;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Requestbrand;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TrackingController extends Controller
{




    public function brand(){
        $faqs=Faq::all();
        $count=Faq::count(); $count=round($count/2);
        $txtdese= Txtdese::find(2);
        $setting=Setting::find(1);
        $tracking=Requestbrand::where('random' , '=' , Session::get('random'))->first();

        return view('index.brand.tracking.index' , compact(['faqs' , 'txtdese' , 'setting' , 'count' , 'tracking' ]));
    }

    public function tracking_result(Request $request){

        $txtdeses= Txtdese::all();
        $tracking=Requestbrand::where('random' , '=' ,$request->random)->first();

        if($tracking){
            return back()->with(['success_index' => 'Your document was successfully found'  ,  'random' => $request->random]);

        }else{
            return back()->with(['danger_index' => 'Unfortunately, your document could not be found'  ,  'random' => $request->random]);
        }


        }










}
