<?php

namespace App\Http\Controllers\Index;


use App\Models\Page;

use App\Models\User;
use App\Models\Comid;
use App\Models\Support;
use App\Models\Txtdese;
use App\Models\Spotlite;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class IndexController extends Controller
{



    public function __construct()
    {
        // $this->middleware('guest:web');
    }


    public function index(){

   /*      User::create([
            'username' => 'Name34ujkkk',
            'name' => 'Name34',
            'email' => 'mustafa1390@gmail.com',
            'password' => Hash::make('123456') ,
        ]); */
        $spotlites = Spotlite::all();
        $comidsfirst  = Comid::where([ ['status' , 'first'], ])->get();
        $comidssec  = Comid::where([ ['status' , 'second'], ])->get();
        $coment  = Comid::where([ ['status' , 'coment'], ])->get();
        $mnglogos  = Comid::where([ ['status' , 'mnglogos'], ])->get();
        $mysetting=Setting::find(1);
        $faqs=Faq::all();
        $count=Faq::count(); $count=round($count/2);

        // return view('index.home.index' , compact([ 'spotlites' , 'comidsfirst' , 'comidssec'  , 'coment'  , 'mysetting' ]));
        return view('index.brand.index' , compact([ 'spotlites' , 'comidsfirst' , 'comidssec'  , 'coment'  , 'mysetting'  , 'faqs', 'count' , 'mnglogos' ]));
        // return view('index.brand.page.index' , compact([ 'spotlites' , 'comidsfirst' , 'comidssec'  , 'coment'  , 'mysetting' ]));

    }


    public function panel(){
        return view('user.panel.index');
    }

    public function dashboard(){
        $dash_id  = Auth::guard('user')->user()->id;

        return view('custome.dashboard.index' , compact(['dash_id']));
    }

    public function page($title  ){
        $mypage=Page::where('title' , $title)->first();
        // return view('index.page.mypage' , compact(['mypage']));
        return view('index.brand.page.index' , compact(['mypage']));
    }

    public function support(){
        $txtdese=Txtdese::where('id' , '4')->first();
        $setting=Setting::where('id' , '1')->first();
        // return view('index.support.index' , compact(['txtdese']));
        return view('index.brand.contact.index' , compact(['txtdese' , 'setting']));
    }


    public function supportPost(Request $request){

        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tell' => 'required| min:4',
            'text' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);



    Support::create($request->all());
Alert::success('با موفقیت ارسال شد', 'پیام شما با موفقیت ارسال شد');

return back();

    }




    public function faqs(){
        $faqs=Faq::all();
        $count=Faq::count(); $count=round($count/2);
        $txtdese=Txtdese::where('id' , '5')->first();
        $setting=Setting::find(1);

        // return view('index.faqs.index' , compact(['faqs' , 'txtdese' , 'setting']));

        return view('index.brand.faqs.index' , compact(['faqs' , 'txtdese' , 'setting' , 'count']));
    }


}
