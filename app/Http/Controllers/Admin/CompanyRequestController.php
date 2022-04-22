<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\CompanyFile;
use App\Models\CompanyPlan;
use App\Models\CompanyType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyRequest;
use App\Models\CompanyService;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\CompanyRequestRequest;
use phpDocumentor\Reflection\Types\Null_;

class CompanyRequestController extends Controller
{


    public function index(){
        $company_requests= CompanyRequest::where([ ['id','<>','0'] ])->orderby('id' , 'desc')->get();
        return view('admin.company.request.index' , compact(['company_requests'  ]));
    }


    public function create($plan=0){
        $users=User::all();
        $company_services=CompanyService::all();
        $company_plans=CompanyPlan::all();
        $company_types=CompanyType::all();
        return view('admin.company.request.create' , compact([ 'users' , 'company_services' , 'company_plans' , 'company_types' , 'plan' ]) );
    }

    public function edit($id){
        $company_request=CompanyRequest::find($id);
        return view('admin.company.request.edit' , compact(['company_request'  ]));
    }


    public function store(CompanyRequestRequest $request)
    {

        $data = $request->all();
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
        return redirect()->route('admin.company.request.index');
    }

    public function show($id)
    {
        $company_request=CompanyRequest::find($id);
        $users=User::all();
        $company_services=CompanyService::all();
        $company_plans=CompanyPlan::all();
        $company_types=CompanyType::all();
        return view('admin.company.request.show' , compact([ 'company_request' , 'users' , 'company_services' , 'company_plans' , 'company_types' ]) );


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




    public function status( $id , $status , CompanyRequestRequest $request){

/*
        $request->validate([
            'price' => ['required',new ValidateRule('validate_rep_price')] ,
        ]); */

        $company_request=CompanyRequest::find($id);
        $data = $request->all();

        // dd($status);


        $data['price'] = str_rep_price($data['price']);
        store_timeline_1('admin' , 'company_request' , $data['text'] , $status , $company_request->user_id , $id  , 1);

        $statusacc = status_req($status,'status');


        if(($status=='active')||($status=='waiting')){
            Alert::success('سفارش با موفقیت فعال شد', 'سفارش با موفقیت فعال شد');
            $company_request->update(['status' => 'active'   ]);

        }
    if($status=='reactive'){
        Alert::success('سفارش مجددا با موفقیت فعال شد', 'سفارش با موفقیت مجددا فعال شد لطفا نسبت به براورد قیمت اقدام نمایید ');
        $company_request->update(['status' => 'register' ]);

    }
    if($status=='register'){
        Alert::success('سفارش با موفقیت براورد هزینه شد', 'سفارش با موفقیت براورد هزینه شد');
        $company_request->update(['status' =>'waiting' , 'price'=> $data['price'] ]);

    }
    if($status=='inactive'){
        Alert::error('سفارش لغو شد         ', 'متاسفانه سفارش شما لغو شد');
        $company_request->update(['status' => 'inactive' ]);
    }



        return back();

    }






}
