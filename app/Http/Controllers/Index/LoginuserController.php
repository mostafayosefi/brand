<?php

namespace App\Http\Controllers\Index;

use App\Models\User;
use App\Models\Setting;
use App\Models\Txtdese;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginuserController extends Controller
{

//  test fr

    public function register(){
        $txtdese=Txtdese::where('id' , '3')->first();

        if (Auth::guard('user')->user()) {
      return redirect()->route('user.dashboard.index');  }
        return view('index.brand.auth.register' , compact([ 'txtdese' ]) );
    }



    public function store(Request $request)
    {

        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,$request->username',
            'tell' => 'required|unique:users,tell,$request->tell',
            'email' => 'required|unique:users,email,$request->email',
            'password' => 'required| min:4 |confirmed',
            'password_confirmation' => 'required| min:4',
            'g-recaptcha-response' => 'required|captcha'
        ]);



        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'tell' => $request->tell,
            'password' => Hash::make($request->password) ,
        ]);
        if(Auth::guard('user')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

        Alert::success('با موفقیت انجام شد', 'ثبت نام شما باموفقیت انجام شد');
        return redirect()->route('user.dashboard.index');

        }

    }


    public function login(){
        $txtdese=Txtdese::where('id' , '2')->first();
        $setting=Setting::find(1);


        if (Auth::guard('user')->user()) {
      return redirect()->route('user.dashboard.index');  }
        return view('index.brand.auth.login' , compact([ 'txtdese' , 'setting']) );
    }


    public function authenticate(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'

        ]);
        if(Auth::guard('user')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            Alert::success('با موفقیت انجام شد', 'ورود شما باموفقیت انجام شد');

            return redirect()->route('user.dashboard.index');



        }else{

Alert::error('لطفا اطلاعات را به صورت صحیح وارد نمایید   ', 'لطفا نام کاربری و رمزعبور را به صورت صحیح وارد نمایید');
            return redirect()->route('index.user.login');

        }

    }




    public function logout(Request $request){
        Auth::guard('user')->logout();
        Alert::success('با موفقیت انجام شد', ' شما باموفقیت از اکانت کاربری خود خارج شدید   ');
        return redirect()->route('index.user.login');
    }
}
