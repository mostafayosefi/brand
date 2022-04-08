<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TransferController extends Controller
{


    public function index(){
         $transfers= Transfer::all();
        return view('admin.domain.transfer.index' , compact(['transfers'  ]));
    }


    public function show($id)
    {
         $transfer= Transfer::find($id);
        return view('admin.domain.transfer.show' , compact(['transfer'  ]));

    }



    public function destroy($id , Request $request){

        $transfer=Transfer::where([ ['id' , $id ]   ,  ['status' , '<>' ,'active' ] ,  ])->first();
        if($transfer){
            $delete=Transfer::where([ ['id' , $id ]  ,  ['status' , '<>' ,'active' ] ,  ])->delete();
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        }else{
            Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات تایید نشده قابل حذف می باشند');
        }
        return back();


    }

    public function status(Request $request , $id){
        $status=Change_status($id,'transfers');
        return back();
    }




}
