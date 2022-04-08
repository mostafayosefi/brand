<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Filebrand;
use App\Rules\ValidateRule;
use App\Models\Requestbrand;
use App\Models\Servicebrand;
use Illuminate\Http\Request;
use App\Models\Categorybrand;
use App\Models\Listservicebrand;
use App\Models\Subcategorybrand;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\RequestbrandRequest;

class RequestbrandController extends Controller
{


    public function index(){
        $requestbrands= Requestbrand::where([ ['id','<>','0'] ])->orderby('id' , 'desc')->get(); 
        return view('admin.requestbrand.index' , compact(['requestbrands'  ]));
    }


    public function create(){
        $users=User::all();
        $servicebrands=Servicebrand::all();
        $categorybrands=Categorybrand::all();
        $subcategorybrands=Subcategorybrand::all();
        return view('admin.requestbrand.create' , compact([ 'users' , 'servicebrands' , 'categorybrands' , 'subcategorybrands' ]) );
    }

    public function edit($id){
        $requestbrand=Requestbrand::find($id);
        return view('admin.requestbrand.edit' , compact(['requestbrand'  ]));
    }


    public function store(RequestbrandRequest $request)
    {

        $data = $request->all();
        $data['status']='register';
        $requestbrand=Requestbrand::create($data);
        $image_uploader_multiple =  uploadFileArray($request->image_uploader_multiple,'images/requestbrands');
        if($image_uploader_multiple){
            foreach($image_uploader_multiple as $file){
                Filebrand::create([ 'name'=>$file , 'requestbrand_id'=>$requestbrand->id ]);
            }
        }

       $funclistbeand = storelistbrands($requestbrand->id,$request->servicebrand);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.requestbrand.index');
    }

    public function show($id)
    {

        $requestbrand=Requestbrand::find($id);
        $users=User::all();
        $servicebrands=Servicebrand::all();
        $categorybrands=Categorybrand::all();
        $subcategorybrands=Subcategorybrand::all();
        return view('admin.requestbrand.show' , compact([ 'requestbrand' , 'users' , 'servicebrands' , 'categorybrands' , 'subcategorybrands' ]) );


    }



    public function update(RequestbrandRequest $request, $id , Requestbrand $requestbrand){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $requestbrand=Requestbrand::find($id);
        $data = $request->all();
        $data['image']= $requestbrand->image;
        $data['image']  =  uploadFile($request->file('image'),'images/requestbrands',$requestbrand->image);
        $requestbrand->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , RequestbrandRequest $request){
        Requestbrand::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }




    public function status( $id , $status , RequestbrandRequest $request){

/*
        $request->validate([
            'price' => ['required',new ValidateRule('validate_rep_price')] ,
        ]); */

        $requestbrand=Requestbrand::find($id);
        $data = $request->all();

        // dd($status);


        $data['price'] = str_rep_price($data['price']);
        store_timeline_1('admin' , 'requestbrand' , $data['text'] , $status , $requestbrand->user_id , $id  , 1);

        $statusacc = status_req($status,'status');


        if(($status=='active')||($status=='waiting')){
            Alert::success('سفارش با موفقیت فعال شد', 'سفارش با موفقیت فعال شد');
            $requestbrand->update(['status' => 'active'   ]);

        }
    if($status=='reactive'){
        Alert::success('سفارش مجددا با موفقیت فعال شد', 'سفارش با موفقیت مجددا فعال شد لطفا نسبت به براورد قیمت اقدام نمایید ');
        $requestbrand->update(['status' => 'register' ]);

    }
    if($status=='register'){
        Alert::success('سفارش با موفقیت براورد هزینه شد', 'سفارش با موفقیت براورد هزینه شد');
        $requestbrand->update(['status' =>'waiting' , 'price'=> $data['price'] ]);

    }
    if($status=='inactive'){
        Alert::error('سفارش لغو شد         ', 'متاسفانه سفارش شما لغو شد');
        $requestbrand->update(['status' => 'inactive' ]);
    }



        return back();

    }





}
