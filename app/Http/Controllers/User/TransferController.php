<?php

namespace App\Http\Controllers\User;

use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\MyTransferController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransferController extends Controller
{


    public function index(){

        $user_id=Auth::guard('user')->user()->id;
        $transfers= Transfer::where([ ['user_id' , '=' ,$user_id ] , ]   )->get();
        return view('custome.domain.transfer.index' , compact(['transfers'  ]));
    }


    public function create(){
        return view('custome.domain.transfer.create' );
    }

    public function edit($id){

    }


    public function store(Request $request)
    {


        $rulle=ruledomain($request);
        $data = $request->all();
        $data['user_id']=Auth::guard('user')->user()->id;
        $data['domain']=$data['searchdomain'];

        $transfer=query_table_transfer($data);

        $data['operator']= 'checkTransferStatus';
        $tasks_controller = new MyTransferController('web');
        return  $tasks_controller->checkTransferStatus(  $data );


    }

    public function show($id)
    {
        $user_id=Auth::guard('user')->user()->id;
        $transfer= Transfer::where([ ['user_id' , '=' ,$user_id ] , ['id' , '=' ,$id ] , ]   )->first();
        return view('custome.domain.transfer.show' , compact(['transfer'  ]));

    }



    public function update(Request $request, $id , Transfer $transfer){

        $data = $request->all();
        $data['operator']= 'transferDomain';
        $tasks_controller = new MyTransferController('web');
        return  $tasks_controller->transferDomain(  $data );


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
