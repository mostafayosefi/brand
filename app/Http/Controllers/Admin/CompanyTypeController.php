<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompanyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyProperty;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyTypeController extends Controller
{


    public function index(){
        $company_types= CompanyType::all();
        return view('admin.company.type.index' , compact(['company_types'  ]));
    }


    public function create(){
        return view('admin.company.type.create' );
    }

    public function edit($id){
        $company_type=CompanyType::find($id);
        return view('admin.company.type.edit' , compact(['company_type'  ]));
    }


    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();

        $company_type = CompanyType::create($data);

       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.company.type.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CompanyType $company_type){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);

        $company_type=CompanyType::find($id);
        $data = $request->all();
        $company_type->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();

    }


    public function destroy($id , Request $request){
        CompanyType::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }


    public function destroyproperty($id , Request $request){
        CompanyProperty::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'امکانات با موفقیت حذف شد');
        return back();
    }





    public function status(Request $request , $id){
        $status=Change_status($id,'company_types');
        return back();
    }




}
