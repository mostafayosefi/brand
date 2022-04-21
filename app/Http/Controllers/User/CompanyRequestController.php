<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Payment;
use App\Models\CompanyFile;
use App\Models\CompanyPlan;
use App\Models\CompanyType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyRequest;
use App\Models\CompanyService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\CompanyRequestRequest;

class CompanyRequestController extends Controller
{



    public function index(){
        $data['user_id']  = Auth::guard('user')->user()->id;
        $company_requests=CompanyRequest::where([ ['user_id' , $data['user_id']], ])->orderby('id' , 'desc')->get();
        return view('custome.company.request.index' , compact(['company_requests'  ]));
    }


    public function create($plan=Null){
        $users=User::all();
        $company_services=CompanyService::all();
        $company_plans=CompanyPlan::all();
        $company_types=CompanyType::all();
        return view('custome.company.request.create' , compact([ 'users' , 'company_services' , 'company_plans' , 'company_types' , 'plan' ]) );
    }

    public function edit($id){
        $company_request=CompanyRequest::find($id);
        return view('custome.company.request.edit' , compact(['company_request'  ]));
    }


    public function store(CompanyRequestRequest $request)
    {


        $data = $request->all();
        $data['user_id']  = Auth::guard('user')->user()->id;
        // $data['status']='register';
        $data['status']='waiting';
        $data['random']= Str::random(8);

        $company_request=CompanyRequest::create($data);
        $image_uploader_multiple =  uploadFileArray($request->image_uploader_multiple,'images/company_requests');
        if($image_uploader_multiple){
            foreach($image_uploader_multiple as $file){
                CompanyFile::create([ 'name'=>$file , 'company_request_id'=>$company_request->id ]);
            }
        }

       $funclistbeand = storelistcompany($company_request->id,$request->company_service);
       $price=sumpricereqcompany($company_request->id);
       $company_request->update([ 'price' => $price  ]);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('user.company.request.index');
    }

    public function show($id)
    {

        $company_request=CompanyRequest::find($id);
        $users=User::all();
        $company_services=CompanyService::all();
        $company_plans=CompanyPlan::all();
        $company_types=CompanyType::all();
        return view('custome.company.request.show' , compact([ 'company_request' , 'users' , 'company_services' , 'company_plans' , 'company_types' ]) );

    }



    public function update(CompanyRequestRequest $request, $id , CompanyRequest $company_request){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $company_request=CompanyRequest::find($id);
        $data = $request->all();
        $data['image']= $company_request->image;
        $data['image']  =  uploadFile($request->file('image'),'images/company_requests',$company_request->image);
        $company_request->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }



    public function destroy($id , Request $request){


        CompanyRequest::destroy($id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }





    public function payment(  $id , Request $request ){

        $company_request=CompanyRequest::find($id);
        $data = $request->all();


        // dd($data);

        $payment = Payment::updateOrCreate([
            'company_request_id' => $company_request->id
        ], [
            'type' => $data['type'],
            'textUser' => $data['textUser'],
        ]);


      $data['oper']='company_request';
      $exito=method_payment($data);
      $data['status']=$exito['status'];
      $activedes=$exito['active'];

      store_timeline_1('user' , 'company_request' , $data['textUser'] , $data['type']  , $company_request->user_id , $id  , $activedes);


      $company_request->update([ 'status'=> $data['status'] ]);

      return back();

    }



}
