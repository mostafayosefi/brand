<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompanyPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyProperty;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyPlanController extends Controller
{


    public function index(){
        $company_plans= CompanyPlan::all();
        return view('admin.company.plan.index' , compact(['company_plans'  ]));
    }


    public function create(){
        return view('admin.company.plan.create' );
    }

    public function edit($id){
        $company_plan=CompanyPlan::find($id);
        return view('admin.company.plan.edit' , compact(['company_plan'  ]));
    }


    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image'),'images/company_plans','');

        $data['price'] = str_rep_price($data['price']);
        $company_plan = CompanyPlan::create($data);

      $insertarray= insertarray($request->input('feild_name') , 'CompanyProperty' , $company_plan->id  );


       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.company.plan.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , CompanyPlan $company_plan){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);

        $company_plan=CompanyPlan::find($id);
        $data = $request->all();
        $data['image']= $company_plan->image;
        $data['image']  =  uploadFile($request->file('image'),'images/company_plans',$company_plan->image);
        $company_plan->update($data);
        $insertarray= insertarray($request->input('feild_name') , 'CompanyProperty' , $company_plan->id  );
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
        
    }


    public function destroy($id , Request $request){
        CompanyPlan::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }


    public function destroyproperty($id , Request $request){
        CompanyProperty::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'امکانات با موفقیت حذف شد');
        return back();
    }





    public function status(Request $request , $id){
        $status=Change_status($id,'company_plans');
        return back();
    }




}
