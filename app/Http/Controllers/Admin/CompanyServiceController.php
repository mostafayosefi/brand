<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompanyService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyProperty;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyServiceController extends Controller
{


    public function index(){
        $company_services= CompanyService::all();
        return view('admin.company.service.index' , compact(['company_services'  ]));
    }


    public function create(){
        return view('admin.company.service.create' );
    }

    public function edit($id){
        $company_service=CompanyService::find($id);
        return view('admin.company.service.edit' , compact(['company_service'  ]));
    }


    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();

        $data['price'] = str_rep_price($data['price']);
        $company_service = CompanyService::create($data);

       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.company.service.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CompanyService $company_service){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $company_service=CompanyService::find($id);
        $data = $request->all();
         $company_service->update($data);
         Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();

    }


    public function destroy($id , Request $request){
        CompanyService::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }


    public function destroyproperty($id , Request $request){
        CompanyProperty::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'امکانات با موفقیت حذف شد');
        return back();
    }





    public function status(Request $request , $id){
        $status=Change_status($id,'company_services');
        return back();
    }




}
