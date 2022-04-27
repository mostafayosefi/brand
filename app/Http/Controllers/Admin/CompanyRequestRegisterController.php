<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyRegister;
use App\Models\CompanyRegisterFile;
use App\Models\CompanyRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyRequestRegisterController extends Controller
{



    public function store(Request $request , CompanyRequest $company_request)
    {
        // dd($company_request->name);
        $request->validate([
            'number' => 'required',
            'authcode' => 'required',
            'office' => 'required',
            'dateconfermation' => 'required',
        ]);
        $data = $request->all();

        $data['text']='ثبت نهایی شرکت باموفقیت انجام شد';
        $status='recerve';

        store_timeline_1('admin' , 'company_request' , $data['text'] , $status , $company_request->user->id , $company_request->id , 1);

       CompanyRegister::create($data);

       $company_request->update(['status' => $status ]);


       session(['err' => '1']);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
       return back();
    }



    public function store_file(Request $request , CompanyRegister $company_register)
    {


$name=$request->input_name;
$image_uploader_multiple[]=$request->image_uploader_multiple;

$image_uploader_multiple =  uploadFileArray($request->image_uploader_multiple,'images/company_register');
if($image_uploader_multiple){
    foreach($image_uploader_multiple as $key => $file){
CompanyRegisterFile::create([ 'type'=>$name[$key] , 'name'=>$file , 'company_register_id'=>$company_register->id ]);
    }
}

$data = $request->all();

$data['text']='آپلود مدارک شرکت با موفقیت انجام شد';
$status='file';

store_timeline_1('admin' , 'company_request' , $data['text'] , $status , $company_register->company_request->user->id , $company_register->company_request->id , 1);

session(['err' => '2']);
Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
return back();

    }





    public function destroy($id , Request $request){

        session(['err' => '2']);
        CompanyRegisterFile::destroy($id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }






}
