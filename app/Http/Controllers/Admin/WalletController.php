<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WalletController extends Controller
{



    public function index(){
         $wallets= Wallet::all();
        return view('admin.wallet.index' , compact(['wallets'  ]));
    }


    public function create(){
        $users= User::all();
        return view('admin.wallet.create' , compact(['users'  ]));
    }

    public function edit($id){
        $value=Wallet::find($id);
        return view('user.wallet.edit' , compact(['value'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
        ]);
        $data = $request->all();
        $data['flag']  =  'inc';
        $data['status']  =  'active';

       Wallet::create($data);
       Alert::success('افزایش اعتبار حساب کاربر با موفقیت انجام شد ', 'افزایش اعتبار حساب کاربر با موفقیت انجام شد');
        return redirect()->route('admin.wallet.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Wallet $wallet){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $value=Wallet::find($id);
        $data = $request->all();
        $data['image']= $value->image;
        $data['image']  =  uploadFile($request->file('image'),'images/wallets',$value->image);
        $value->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Wallet::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'wallets');
        return back();
    }



}
