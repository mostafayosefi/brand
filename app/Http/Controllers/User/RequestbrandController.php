<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Payment;
use App\Models\Setting;
use App\Models\Filebrand;
use Illuminate\Support\Str;
use App\Models\Requestbrand;
use App\Models\Servicebrand;
use Illuminate\Http\Request;
use App\Models\Categorybrand;
use App\Models\Listservicebrand;
use App\Models\Subcategorybrand;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\RequestbrandRequest;

class RequestbrandController extends Controller
{


    public function index(){
        $data['user_id']  = Auth::guard('user')->user()->id;
        $requestbrands=Requestbrand::where([ ['user_id' , $data['user_id']], ])->orderby('id' , 'desc')->get();
        return view('custome.requestbrand.index' , compact(['requestbrands'  ]));
    }


    public function create(){
        $users=User::all();
        $setting=Setting::find(1);
        $servicebrands=Servicebrand::all();
        $categorybrands=Categorybrand::all();
        $subcategorybrands=Subcategorybrand::all();
        return view('custome.requestbrand.create' , compact([ 'users' , 'servicebrands' , 'categorybrands' , 'subcategorybrands' , 'setting' ]) );
    }

    public function edit($id){
        $requestbrand=Requestbrand::find($id);
        return view('admin.requestbrand.edit' , compact(['requestbrand'  ]));
    }


    public function store(RequestbrandRequest $request)
    {

        $data = $request->all();
        $data['status']='waiting';
        $data['random']= Str::random(8);
        $data['user_id']  = Auth::guard('user')->user()->id;
        $requestbrand=Requestbrand::create($data);
        $image_uploader_multiple =  uploadFileArray($request->image_uploader_multiple,'images/requestbrands');
        if($image_uploader_multiple){
            foreach($image_uploader_multiple as $file){
                Filebrand::create([ 'name'=>$file , 'requestbrand_id'=>$requestbrand->id ]);
            }
        }

        $funclistbeand = storelistbrands($requestbrand->id,$request->servicebrand);

        $funclistbeand = storelistsubbrands($requestbrand->id,$request->subcategorybrand);

        $price=sumpricereqbrand($requestbrand->id,'sum');
       $requestbrand->update([ 'price' => $price  ]);
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

        $setting=Setting::find(1);

        return view('custome.requestbrand.show' , compact([ 'requestbrand' , 'users' , 'servicebrands' , 'categorybrands' , 'subcategorybrands' , 'setting' ]) );


    }



    public function update(Requestbrand $request, $id , Requestbrand $requestbrand){
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


    public function destroy($id , Requestbrand $request){
        Requestbrand::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Requestbrand $request , $id){
        $status=Change_status($id,'requestbrands');
        return back();
    }





    public function payment(  $id , Request $request ){

        $requestbrand=Requestbrand::find($id);
        $data = $request->all();

        $payment = Payment::updateOrCreate([
            'requestbrand_id' => $requestbrand->id
        ], [
            'type' => $data['type'],
            'textUser' => $data['textUser'],
        ]);


      $data['oper']='requestbrand';
      $exito=method_payment($data);
      $data['status']=$exito['status'];
      $activedes=$exito['active'];

      store_timeline_1('user' , 'requestbrand' , $data['textUser'] , $data['type']  , $requestbrand->user_id , $id  , $activedes);


      $requestbrand->update([ 'status'=> $data['status'] ]);

      return back();

    }



}
