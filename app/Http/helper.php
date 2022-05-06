<?php

use App\Models\User;
use App\Models\Renew;
use App\Models\Domain;
use App\Models\Ticket;
use App\Models\Wallet;
use App\Models\Contact;

use App\Models\Setting;

use App\Models\Transfer;
use App\Rules\Uniqemail;
use App\Models\Nameserver;
use App\Models\Webservice;
use App\Models\Checkdomain;
use App\Rules\ValidateLink;
use App\Rules\ValidateRule;
use Illuminate\Support\Str;
use App\Models\Requestbrand;
use App\Models\Servicebrand;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use App\Models\Apiwebservice;
use App\Models\Categorybrand;
use App\Models\ContentDomain;
use App\Models\Loginhistorie;
use Hekmatinasser\Verta\Verta;
use App\Models\CompanyProperty;
use App\Models\Discriptionorder;
use App\Models\Listservicebrand;
use App\Models\Subcategorybrand;
use App\Models\CompanyListService;
use App\Models\CompanyRequest;
use App\Models\CompanyService;
use App\Models\RequestbrandListSubcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;



if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}


if(!function_exists('isShow'))
{
    function isShow($key , $showClassName = 'show')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}







//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-primary">فعال</span>';
        }
        elseif($status == 'inactive')
        {
            echo '<span class="badge badge-danger">غیرفعال</span>';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}





if(! function_exists('getstatusdefault') ) {

    function getstatusdefault($status)
    {



/*
        if($status == 'active')
        {
            echo '<i class="fas fa-toggle-on"  ></i> Default';

        }
        elseif($status == 'inactive')
        {
            echo '';
        }
 */

        if($status == 'active')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled checked class="form-check-input"> پیش فرض </label>
             </div>  ';

        }
        elseif($status == 'inactive')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled   class="form-check-input">   </label>
             </div> ';
        }



    }

}



if(! function_exists('uploadFileArray') ) {
    function uploadFileArray($file,$path){
if($file){
  if(is_array($file)){
      foreach($file as $part) {
          if($part){

            $current_timestamp = \Carbon\Carbon::now()->timestamp;
            $imagePath = "/upload/$path/";
            $filename = $current_timestamp . $part->getClientOriginalName();
            $file = $part->move(public_path($imagePath) , $filename);
            $filearray[]=$imagePath.$filename;

          }  }  }
          return $filearray;

 }else{
    //  return $defaultfile;
 }
    }

}


if(! function_exists('uploadFile') ) {

    function uploadFile($file,$path,$defaultfile)
    {
 if($file){
        $current_timestamp = \Carbon\Carbon::now()->timestamp;
        $imagePath = "/upload/$path/";
        $filename = $current_timestamp . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath) , $filename);
        return $imagePath.$filename;

 }else{
     return $defaultfile;
 }
    }

}



 if(! function_exists('date_frmat_mnth') ) {
    function date_frmat_mnth($date)
    {
        $date = Jalalian::forge($date)->format('%A, %d %B %Y');
        return $date;

    }

}
//get date_frmat
if(! function_exists('date_frmat') ) {
    function date_frmat($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d ساعت H:i a');
        return $date;
        // return Verta($date)->format('Y/m/d ساعت H:i a');

    }

}


 if(! function_exists('date_frmat_ymd') ) {
    function date_frmat_ymd($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d');
        return $date;

    }

}



if(! function_exists('storelistbrands') ) {
    function storelistbrands($requestbrand_id,$request_servicebrand){

        $servicebrands=Servicebrand::all();
        foreach($servicebrands as $servicebrand){
             $listbrand =  Listservicebrand::create([ 'requestbrand_id'   => $requestbrand_id,
            'servicebrand_id'     => $servicebrand->id, 'show' => 0, ]);
        }
        foreach($request_servicebrand as  $key =>  $servicebrand){
        $listbrand=Listservicebrand::where([ ['servicebrand_id' ,   $servicebrand ],
        ['requestbrand_id' ,   $requestbrand_id ],  ])->update([ 'show' => 1 ]);
        }


    }
}




if(! function_exists('storelistsubbrands') ) {
    function storelistsubbrands($requestbrand_id,$subcategorybrand){

        $allsubcategories=Subcategorybrand::all();
        foreach($allsubcategories as $allsubcategory){
             $listbrand =  RequestbrandListSubcategory::create([ 'requestbrand_id'   => $requestbrand_id,
            'subcategorybrand_id'     => $allsubcategory->id, 'show' => 0, ]);
        }

        if($subcategorybrand){
        foreach($subcategorybrand as  $key =>  $sub){
        $listbrand=RequestbrandListSubcategory::where([ ['subcategorybrand_id' ,   $sub ],
        ['requestbrand_id' ,   $requestbrand_id ],  ])->update([ 'show' => 1 ]);
        }
    }


    }
}




if(! function_exists('storelistcompany') ) {
    function storelistcompany($company_request_id,$company_services){

        $companyservices=CompanyService::all();
        foreach($companyservices as $companyservice){
             $listcompany =  CompanyListService::create([ 'company_request_id'   => $company_request_id,
            'company_service_id'     => $companyservice->id, 'show' => 0, ]);
        }


        if($company_services){
        foreach($company_services as  $key =>  $company_service){
        $listcompany=CompanyListService::where([ ['company_service_id' ,   $company_service ],
        ['company_request_id' ,   $company_request_id ],  ])->update([ 'show' => 1 ]);
        }
    }



    }
}


if(! function_exists('sumpricereqbrand') ) {
    function sumpricereqbrand($id,$oper){

        $setting=Setting::find(1);
        $priceplan=$setting->mngfinical->priceplan;
        $listbrands=Listservicebrand::where([ ['requestbrand_id' ,   $id ],
        ['show' ,   1 ],  ])->get();
        $countlistsub=RequestbrandListSubcategory::where([ ['requestbrand_id' ,   $id ],
        ['show' ,   1 ],  ])->count();
        if($countlistsub=='0'){ $countlistsub = 0;}else{ $countlistsub = $countlistsub-1;}


        $servicebrand_price=0;
        foreach($listbrands as $listbrand){
           $servicebrand_price = $listbrand->servicebrand->price + $servicebrand_price;
        }
        $price=$servicebrand_price+($countlistsub*$priceplan);

        if($oper=='sum'){
            return $price;
        }

        if($oper=='sumservice'){
            return $servicebrand_price;
        }

        if($oper=='sumsub'){
            return $countlistsub*$priceplan;
        }


    }
}


if(! function_exists('sumpricereqcompany') ) {
    function sumpricereqcompany($id){

        $company_list_services=CompanyListService::where([ ['company_request_id' ,   $id ],
        ['show' ,   1 ],  ])->get();

        $company_request=CompanyRequest::find($id);

        $price=$company_request->company_plan->price;

        foreach($company_list_services as $company_list_service){
           $price = $company_list_service->company_service->price + $price;
        }

        return $price;


    }
}


if(! function_exists('urllink') ) {
    function urllink($urllink)
    {

$mystring = $urllink; $findme   = 'http'; $pos = strpos($mystring, $findme);
  if ($pos !== false) {  $mystring = $urllink; }else{ $mystring = 'http://'.$urllink; }
return  $mystring;

  }
}



if(! function_exists('Mywallet') ) {
    function Mywallet($user_id,$operator)
    {
        $query=Wallet::query()->where([
            ['user_id' , '=' ,$user_id],
            ['status' , '=' ,'active'],
        ]);
        $my_inc=$query->where([
            ['flag' , '=' ,'inc'],
            ])->sum('price');

            $my_dec=Wallet::where([
                ['user_id' , '=' ,$user_id],
                ['status' , '=' ,'active'],
                ['flag' , '=' ,'dec'],
            ])->sum('price');

                $mycharge= $my_inc - $my_dec;
                if($operator=='inc'){  return $my_inc;}
                if($operator=='dec'){  return $my_dec;}
                if($operator=='mycharge'){  return $mycharge;}

    }
}

if(! function_exists('linkdomain') ) {
    function linkdomain($domain,$suffix)
    {

 $countDot=0;
         foreach (count_chars($domain, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }
 if($countDot=='0') {
    return $domain.'.'.$suffix;
  }else{
      return $domain;
    $headers = explode('.', $domain);
    $headers['0'];
  }

  }
}

if(! function_exists('ValidateContact') ) {
    function ValidateContact($user_id)
    {

        $query=Contact::query()->where([
            ['user_id' , '=' ,$user_id],
            ]);
            $mycontact=$query->first();


        $query=Contact::query()->where([
            ['user_id' , '=' ,$user_id],
            ['default' , '=' , 'active'],
            ]);
            $default=$query->first();


            if($mycontact){

        if($default){return $default->id; }else{
            Contact::where('id', $mycontact->id)
            ->update(['default' => 'active']);
            return $mycontact->id;  }

        }else{
           return '0';
        }
    }
}






if(! function_exists('query_resource') ) {
    function query_resource($data,$table)
    {

if($table=='checkdomain'){

        $query=Checkdomain::query()->where([
            ['webservice_id' , $data['webservice_id']],
            ]);

        $myquery=Checkdomain::query()->where([
                ['webservice_id' , $data['webservice_id']],
                ])->orderBy('type' ,'asc')->get();

if($data['muldomain']=='1'){
    $myquery=$query->orderBy('type' ,'asc')->get();
} else{
            $myquery=$query->where([
                ['type' , 'search'],
                ])->orderBy('type' ,'asc')->get();

        }


    }



    return $myquery;


    }
}

        if(! function_exists('SelectDefault') ) {
            function SelectDefault($user_id,$contact)
            {
        Contact::where('user_id', $user_id)
        ->update(['default' => 'inactive']);

if($contact!='0'){
    Contact::where('id', $contact)
    ->update(['default' => 'active']);
}else{
    $mycontact = Contact::where('user_id', $user_id)
    ->orderByDesc('id')->first();

    if($mycontact){
        Contact::where('id', $mycontact->id)
        ->update(['default' => 'active']);
    }

}

    }
}





if(! function_exists('linkdomainOrigin') ) {
    function linkdomainOrigin($domain,$suffix)
    {

 $countDot=0;
         foreach (count_chars($domain, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }
 if($countDot=='0') {
    return $domain;
  }else{
    //   return $domain;
    $headers = explode('.', $domain);
    return $headers['0'];
  }

  }
}





if(! function_exists('multidomain') ) {
    function multidomain($domain,$orginaldomain)
    {
$origin=$orginaldomain.',';
$net=$domain.'.net,';
$org=$domain.'.org,';
// $co=$domain.'.co,';
$com=$domain.'.com,';
// $biz=$domain.'.biz';

$multi=$origin;

if($origin==$com){}else{$multi.=$com;}
if($origin==$org){}else{$multi.=$org;}
if($origin==$net){}else{$multi.=$net;}


 $multi .= '';

if($origin==$net||$origin==$org||$origin==$com){$count='3';}else{$count='4';}

 $mul=array();
 $mul['AllDomain']= $multi;
 $mul['CountWhile']= $count;

 return $mul;
    }
}

//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; فعال </span>';
        }
        elseif($status == 'inactive')
        {
            echo '
            <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp; غیرفعال </span> ';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}




if(! function_exists('update_lastlogin') ) {
    function update_lastlogin($id, $key)
    {




        if($key=='login'){
            $myuser =  User::addSelect(['last_login' => Loginhistorie::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_login;}


        if($key=='ip'){
            $myuser =  User::addSelect(['last_ip' => Loginhistorie::select('ip')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_ip;}

    }

}



if(! function_exists('Change_status') ) {
    function Change_status($id, $table)
    {
        if($table=='users'){
            $table= User::find($id);
            Alert::success('تغییر وضعیت اکانت با موفقیت انجام شد', 'تغییرات وضعیت اکانت با موفقیت انجام شد');
        }
        if($table=='contentdomains'){
            $table= ContentDomain::find($id);
            Alert::success('تغییر وضعیت پسوند دامنه با موفقیت انجام شد', 'تغییرات وضعیت پسوند دامنه با موفقیت انجام شد');
        }

        if($table=='apiwebservice'){
            $table= Apiwebservice::find($id);
            Alert::success('تغییر وضعیت وب سرویس کاربر با موفقیت انجام شد', 'تغییرات وضعیت وب سرویس کاربر با موفقیت انجام شد');
        }



        if($table=='categorybrands'){
            $table= Categorybrand::find($id);
            Alert::success('تغییر وضعیت دسته بندی برند با موفقیت انجام شد', 'تغییرات وضعیت دسته بندی برند با موفقیت انجام شد');
        }


        if($table=='subcategorybrands'){
            $table= Subcategorybrand::find($id);
            Alert::success('تغییر وضعیت زیرگروه برند با موفقیت انجام شد', 'تغییرات وضعیت زیرگروه برند با موفقیت انجام شد');
        }




        if($table->status=='active'){$status='inactive';}
        elseif($table->status=='inactive'){$status='active';}
        $flag = $table->update([ 'status' => $status ]);
        return $flag;


    }




    if(! function_exists('has_webservice') ) {
        function has_webservice($id)
        {


            $apiwebservice = Apiwebservice::where([ ['user_id' , $id], ])->first();

            if($apiwebservice){}else{
                Apiwebservice::create([ 'status'=> 'inactive' , 'user_id' => $id ]);
             }


        }
    }



    if(! function_exists('secret_user') ) {
        function secret_user(Request $request , $user , $oper)
        {


            if($oper=='secret'){

                session(['err' => '1']);
                $request->validate([
                    'password' => 'required| min:4 |confirmed',
                    'password_confirmation' => 'required| min:4'
                ]);
        $user->update([ 'password' => Hash::make($request->password) ]);
        Alert::success('با موفقیت ویرایش شد', 'رمزعبور با موفقیت تغییر پیدا کرد ');
            }


            if($oper=='update'){
                $request->session()->forget('err');

                $request->validate([
                    'name' => 'required',
                    'username' => ['required',new Uniqemail('users','username',$user->id)] ,
                    'email' => ['required' , 'email',new Uniqemail('users','email',$user->id)] ,
                    'tell' => ['required', 'regex:/^09[0-9]{9}$/' ,new Uniqemail('users','tell',$user->id)] ,
                ]);


                 $data = $request->all();
                $data['image']= $user->image;
                $data['image']  =  uploadFile($request->file('image'),'images/users',$user->image);


       $m =  $user->update($data);
         Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');


            }


     return back();



        }
    }







    if(! function_exists('ruledns') ) {
        function ruledns(Request $request)
        {

            $request->validate([
                'domain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','http')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','https')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_pers')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);
        }

    }





    if(! function_exists('ruledomain') ) {
        function ruledomain(Request $request)
        {

            $request->validate([
                'searchdomain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
            ]);
            $request->validate([
                'searchdomain' => [new ValidateLink('UrlNamesilo','http')] ,
            ]);
            $request->validate([
                'searchdomain' => [new ValidateLink('UrlNamesilo','https')] ,
            ]);

            $request->validate([
                'searchdomain' => [new ValidateLink('UrlNamesilo','regec_pers')] ,
            ]);

            $request->validate([
                'searchdomain' => [new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);
        }

    }




    if(! function_exists('Error_Namesilo') ) {
        function Error_Namesilo($operator , $error)
        {

            if($operator == 'checkRegisterAvailability'){
                if($error=='unavailable'){
return $personJSON = response()->json([
    'result' => 'unavailable' ,
]);
                }
                if($error=='unavailable_foreign'){
return $personJSON = response()->json([
    'result' => 'This account has already created an order and it is not possible to delete it' ,
]);
                }
            }

        }
    }


    if(! function_exists('data_build_query') ) {
        function data_build_query($pathapi,$data)
        {

            $setting=Setting::find(1);
            $key = $setting->api;


            // 'key' => 'a7a96a32f40c7044242796' ,  yosefi
            // 'key' => 'bbdf45d2c0d8be4cc6f1' ,   ghochani

            $base_uri='https://www.namesilo.com/'.$pathapi;
            $base = array(
                'version' => '1' ,
                'type' => 'xml' ,
                'key' => $key ,
            );

 $myurl = $base_uri.$data['operator'].'?'.http_build_query($base);
 return $myurl;




        }
    }





    if(! function_exists('data_build_query_array') ) {
        function data_build_query_array( $oper  , $data)
        {


            if($oper=='contact'){

                if($data['operator']=='contactAdd'){
                    $base = array(
                        'fn' => $data['firstname'] ,
                        'ln' => $data['lastname'] ,
                        'ad' => $data['adress'] ,
                        'cy' => $data['city'] ,
                        'st' => $data['state'] ,
                        'zp' => $data['zip'] ,
                        'ct' => $data['country'] ,
                        'em' => $data['email'] ,
                        'ph' => $data['phone'] ,
                        'nn' => $data['nikname'] ,
                        'cp' => $data['company'] ,
                        'ad2' => $data['adres2'] ,
                    );
            }
                if($data['operator']=='contactUpdate'){
                            $base = array(
                                'contact_id' => $data['contact_id'] ,
                                'fn' => $data['firstname'] ,
                                'ln' => $data['lastname'] ,
                                'ad' => $data['adress'] ,
                                'cy' => $data['city'] ,
                                'st' => $data['state'] ,
                                'zp' => $data['zip'] ,
                                'ct' => $data['country'] ,
                                'em' => $data['email'] ,
                                'ph' => $data['phone'] ,
                                'nn' => $data['nikname'] ,
                                'cp' => $data['company'] ,
                                'ad2' => $data['adres2'] ,
                            );
                    }



            if($data['operator']=='contactDelete'){
                $base = array(
                    'contact_id' => $data['contact_id'] ,
                );
        }

            }




            if($oper=='domain'){
                if($data['operator']=='registerDomain'){
                    $base = array(
                        'domain' => $data['domain'] ,
                        'years' => $data['years'] ,
                        'private' => $data['private'] ,
                        'auto_renew' => $data['renew'] ,
                        'contact_id' => $data['contact_id_namesilo'] ,
                        'ns1' => $data['dns1'] ,
                        'ns2' => $data['dns2'] ,
                        'ns3' => $data['dns3'] ,
                        'ns4' => $data['dns4'] ,
                    );
            }


                if($data['operator']=='checkTransferStatus'){
                    $base = array(
                        'domain' => $data['searchdomain'] ,
                    );
                           }


                if($data['operator']=='transferDomain'){
                    $base = array(
                        'domain' => $data['domain'] ,
                        'auth' => $data['auth'] ,
                        'renew' => 0 ,
                        'private' => 0 ,
                    );
                           }




            }




            if($oper=='nameserver'){
                if($data['operator']=='changeNameServers'){

                    $base = array(
                        'domain' => $data['domain'] ,
                        'ns1' => $data['ns1'] ,
                        'ns2' => $data['ns2'] ,
                        'ns3' => $data['ns3'] ,
                        'ns4' => $data['ns4'] ,
                    );

                }
            }





 $myurl = http_build_query($base);
 return $myurl;




        }
    }






    if(! function_exists('query_table_transfer') ) {
        function query_table_transfer( $data)
        {
            $extension=find_extension($data['domain']);
            $price=riyal_extension($extension);
            $transfer=Transfer::where([ ['domain' ,$data['domain']],  ])->first();
            if($transfer){
            }else{
            $transfer = Transfer::create([ 'user_id'=>$data['user_id'] ,'status'=> 'inactive'  ,'domain'=>$data['domain']    ,'price'=>$price     ]);
            }
            return $transfer;
        }
    }




    if(! function_exists('query_table_nameserver') ) {
        function query_table_nameserver( $data)
        {
            $domain=Domain::find($data['domain_id']);

            $nameserver=Nameserver::where([ ['domain' ,$domain->domain ],  ])->first();
            if($nameserver){
            }else{
            $nameserver = Nameserver::create([ 'user_id'=>$data['user_id'] ,'status'=> 'inactive'  ,'domain'=>$domain->domain     ]);
            }
            return $nameserver;
        }
    }


    if(! function_exists('rule_buy_domain') ) {
        function rule_buy_domain(Request $request)
        {


            $request->validate([
                'contact_id' => ['required'] ,
                'dns1' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns2' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns3' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns4' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);




        }
    }


    if(! function_exists('rule_change_nameserver') ) {
        function rule_change_nameserver(Request $request)
        {


            $request->validate([
                'ns1' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'ns2' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'ns3' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'ns4' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);




        }
    }



    if(! function_exists('store_timeline') ) {
        function store_timeline( $by , $operator , $text , $status , $user_id , $arrtimeline , $active)
        {


            $data['by']=$by;
            $data['operator']=$operator;
            $data['order_id']=$arrtimeline['order_id'];
            $data['renew_id']=$arrtimeline['renew_id'];
            $data['user_id']=$user_id;
            $data['flag']=$status;
            $data['text']=$text;
            $data['active']=$active;

            Discriptionorder::create($data);


        }
    }


    if(! function_exists('store_timeline_1') ) {
        function store_timeline_1( $by , $operator , $text , $status , $user_id , $id , $active)
        {


            $data['by']=$by;
            $data['operator']=$operator;
            $data['user_id']=$user_id;
            $data['flag']=$status;
            $data['text']=$text;
            $data['active']=$active;
            if($operator=='requestbrand'){  $data['requestbrand_id']=$id;  }
            if($operator=='company_request'){  $data['company_request_id']=$id;  }


            Discriptionorder::create($data);


        }
    }




    if(! function_exists('status_req') ) {
        function status_req($status,$myfunc)
        {

$nameoper='';
if($status == 'register'){$statusacc='waiting'; $nameoper='براورد هزینه'; $messagetext='براورد هزینه سفارش توسط مدیریت انجام شد';}
if ($status == 'waiting'){$statusacc='active';  $nameoper='تایید سفارش';  $messagetext='سفارش توسط مدیریت تایید شد';}
if ($status == 'active'){$statusacc='active';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش فعال شد';}
if ($status == 'inactive'){$statusacc='register';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش مجددا توسط مدیریت تایید شد';}
if ($status == 'reactive'){$statusacc='register';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش مجددا توسط مدیریت تایید شد';}
if ($status == 'recerve'){$statusacc='active';  $nameoper='ثبت نهایی شرکت';  $messagetext='ثبت نهایی شرکت باموفقیت انجام شد';}
if ($status == 'waitpay'){$statusacc='active';  $nameoper='تایید پرداخت کاربر';  $messagetext='پرداخت کاربر توسط مدیریت تایید شد';}



if($myfunc=='status'){ return $statusacc; }
if($myfunc=='nameoper'){ return $nameoper; }
if($myfunc=='text'){ return $messagetext; }

        }
    }


    if(! function_exists('status_request_company') ) {
        function status_request_company($status,$myfunc)
        {

$nameoper='';
if($status == 'register'){$statusacc='waiting'; $nameoper='براورد هزینه'; $messagetext='براورد هزینه سفارش توسط مدیریت انجام شد';}
if ($status == 'waiting'){$statusacc='active';  $nameoper='تایید سفارش';  $messagetext='سفارش توسط مدیریت تایید شد';}
if ($status == 'active'){$statusacc='active';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش فعال شد';}
if ($status == 'inactive'){$statusacc='register';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش مجددا توسط مدیریت تایید شد';}
if ($status == 'reactive'){$statusacc='register';  $nameoper='فعالسازی مجدد سفارش';  $messagetext='سفارش مجددا توسط مدیریت تایید شد';}
if ($status == 'waitpay'){$statusacc='active';  $nameoper='تایید پرداخت کاربر';  $messagetext='پرداخت کاربر توسط مدیریت تایید شد';}
if ($status == 'recerve'){$statusacc='active';  $nameoper='ثبت نهایی شرکت';  $messagetext='ثبت نهایی شرکت باموفقیت انجام شد';}


if($myfunc=='status'){ return $statusacc; }
if($myfunc=='nameoper'){ return $nameoper; }
if($myfunc=='text'){ return $messagetext; }

        }
    }


    if(! function_exists('str_rep_price') ) {
        function str_rep_price($price)
        {

         return  str_replace( ",","" , $price);


        }
    }

    if(! function_exists('insertarray') ) {
        function insertarray($feild_name , $mymodel , $id  )
        {


            foreach($feild_name as $quan) {
                if($quan != null){


                if($mymodel == 'CompanyProperty'){
                  CompanyProperty::create([ 'name' => $quan , 'company_plan_id'=>$id ]);
                }



                }  }


        }
    }





    if(! function_exists('flage_price') ) {
        function flage_price($price)
        {


 if($price=='0'){
echo   '<span class="spanstatus spanstatus_warning">
                در انتظار تعیین قیمت
</span>';
}else{
$exit=number_format($price).' ريال ';    return  $exit;
}




        }
    }

    if(! function_exists('rulecontact') ) {
        function rulecontact(Request $request)
        {

            $request->validate([
                'firstname' => ['required',new ValidateRule('regec_eng')] ,
                'lastname' => ['required',new ValidateRule('regec_eng')] ,
                'nikname' => ['required', new ValidateRule('regec_eng')] ,
                'phone' => ['required','numeric',new ValidateRule('regec_eng')] ,
                'email' => ['required'] ,
                'zip' => ['required',new ValidateRule('regec_eng')] ,
                'state' => ['required',new ValidateRule('regec_eng')] ,
                'city' => ['required',new ValidateRule('regec_eng')] ,
                'country' => ['required'] ,
                'company' => [new ValidateRule('regec_eng')] ,
                'adres2' => [new ValidateRule('regec_eng')] ,
            ]);


        }
    }


    if(! function_exists('find_extension') ) {
        function find_extension($domain)
        {

            $headers = explode('.', $domain);
            return $headers['1'];
        }
    }



    if(! function_exists('price_extension') ) {
        function price_extension($extension)
        {
            $ContentDomain= ContentDomain::where([ ['name' , $extension ] ])->first();
            if($ContentDomain){return $ContentDomain->price;}else{ return 0;}
         }
    }


    if(! function_exists('riyal_extension') ) {
        function riyal_extension($extension)
        {
            $setting=Setting::find(1);
            $ContentDomain= ContentDomain::where([ ['name' , $extension ] ])->first();
            if($ContentDomain){return $ContentDomain->price*$setting->mngfinical->rateusd;}else{ return 0;}
         }
    }



    if(! function_exists('finaly_price') ) {
        function finaly_price($private ,$year , $price  )
        {


            if($private=='private_on'){   $private_price = 1200;  }
            elseif($private=='private_off'){  $private_price = 0;     }

            $final_price= ($price * $year) + $private_price;
            return   $final_price;


        }
    }


    if(! function_exists('private_price_finaly') ) {
        function private_price_finaly($value)
        {

            if (is_numeric($value)) {
                if (session()->has('year')) {}else{ session(['year' => 1]); }
                if (session()->has('private_price')) { }else{ session(['private_price' => 0]); }
                session(['year' => $value]);
            }else{


                if (session()->has('year')) { }else{ session(['year' => 1]); }
                if (session()->has('private_price')) { }else{ session(['private_price' => 0]); }

                if($value=='private_on'){   session(['private_price' => 1200]);  }
                elseif($value=='private_off'){  session(['private_price' => 0]);   }else{
                    session(['private_price' => 0]);
                }

            }





         }
    }


    if(! function_exists('method_payment') ) {
        function method_payment($data)
        {
            $exito=[];

            if($data['oper']=='buy_domain'){

            if($data['type']=='offline'){
                Alert::success('درخواست ثبت دامنه با موفقیت ثبت شد ', 'درخواست جهت تایید سفارش ثبت دامنه ارسال شد      ');
                $exito['status']='waiting';
                $exito['active']='1';
                return $exito;
            }

            if($data['type']=='online'){
                Alert::error('درگاه پرداخت فعالی وجود ندارد ', '  متاسفانه درگاه پرداخت جهت پرداخت آنلاین فعلا غیرفعال می باشد');
                $exito['status']='waiting';
                $exito['active']='0';
                return $exito;            }

            if($data['type']=='depo'){
               $mycharge = Mywallet($data['user_id'],'mycharge');
               if($mycharge<$data['price']){
                Alert::error('پرداخت هزینه سفارش انجام نشد   ', '      متاسفانه هزینه سفارش بیشتر از هزینه سفارش شما می باشد لطفا جهت پرداخت نسبت به شارژ مابه تفاوت هزینه اقدام نمایید          ');
                $exito['status']='rezerve';
                $exito['active']='0';
                return $exito;             }else{
        $data['flag']  =  'dec';
        $data['status']  =  'active';
        Wallet::create($data);
        Alert::success('با موفقیت پرداخت شد', '     هزینه سفارش با موفقیت از شارژ حساب کاربری پرداخت شد      ');

        $exito['status']='active';
        $exito['active']='1';
        return $exito;    }
            }


            }



            if($data['oper']=='renew'){

            if($data['type']=='offline'){
                Alert::success('درخواست تمدید دامنه با موفقیت ثبت شد ', 'درخواست جهت تایید سفارش تمدید دامنه ارسال شد      ');
                $exito['status']='waiting';
                $exito['active']='1';
                return $exito;
            }

            if($data['type']=='online'){
                Alert::error('درگاه پرداخت فعالی وجود ندارد ', '  متاسفانه درگاه پرداخت جهت پرداخت آنلاین فعلا غیرفعال می باشد');
                $exito['status']='waiting';
                $exito['active']='0';
                return $exito;            }

            if($data['type']=='depo'){
               $mycharge = Mywallet($data['user_id'],'mycharge');
               if($mycharge<$data['price']){
                Alert::error('پرداخت هزینه سفارش انجام نشد   ', '      متاسفانه هزینه سفارش بیشتر از هزینه سفارش شما می باشد لطفا جهت پرداخت نسبت به شارژ مابه تفاوت هزینه اقدام نمایید          ');
                $exito['status']='rezerve';
                $exito['active']='0';
                return $exito;             }else{
        $data['flag']  =  'dec';
        $data['status']  =  'active';
        Wallet::create($data);
        Alert::success('با موفقیت پرداخت شد', '     هزینه سفارش با موفقیت از شارژ حساب کاربری پرداخت شد      ');

        $exito['status']='active';
        $exito['active']='1';
        return $exito;    }
            }


            }




            if(($data['oper']=='requestbrand')||($data['oper']=='company_request')){

                if($data['type']=='offline'){
                    Alert::success('پرداخت غیر مستقیم جهت ثبت برند با موفقیت ثبت شد ', 'پرداخت غیرمستقیم جهت تایید سفارش ثبت برند ارسال شد      ');
                    $exito['status']='waitpay';
                    $exito['active']='1';
                    return $exito;
                }

                if($data['type']=='online'){
                    Alert::error('درگاه پرداخت فعالی وجود ندارد ', '  متاسفانه درگاه پرداخت جهت پرداخت آنلاین فعلا غیرفعال می باشد');
                    $exito['status']='waiting';
                    $exito['active']='0';
                    return $exito;            }

                if($data['type']=='depo'){
                   $mycharge = Mywallet($data['user_id'],'mycharge');
                   if($mycharge<$data['price']){
                    Alert::error('پرداخت هزینه سفارش انجام نشد   ', '      متاسفانه هزینه سفارش بیشتر از هزینه سفارش شما می باشد لطفا جهت پرداخت نسبت به شارژ مابه تفاوت هزینه اقدام نمایید          ');
                    $exito['status']='waiting';
                    $exito['active']='0';
                    return $exito;             }else{
            $data['flag']  =  'dec';
            $data['status']  =  'active';
            Wallet::create($data);
            Alert::success('با موفقیت پرداخت شد', '     هزینه سفارش با موفقیت از شارژ حساب کاربری پرداخت شد      ');

            $exito['status']='active';
            $exito['active']='1';
            return $exito;    }
                }


                }









         }
    }




    if(! function_exists('count_dashboard') ) {
        function count_dashboard($dash_id,$mytable)
        {



if($mytable=='user'){ $query=User::query()->where([ ['id' , '<>' ,'1'], ]);}
if($mytable=='company_request'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_company_request'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_company_request_admin'){ $query=CompanyRequest::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}
if($mytable=='requestbrand'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_requestbrand'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_requestbrand_admin'){ $query=Requestbrand::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}




if($mytable=='contact'){ $query=Contact::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='domain'){ $query=Domain::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='renew'){ $query=Renew::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='transfer'){ $query=Transfer::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='nameserver'){ $query=Nameserver::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='ticket'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ]);}
if($mytable=='new_ticket'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ['fromshow' , '=' ,'unread'], ]);}
if($mytable=='new_ticket_admin'){ $query=Ticket::query()->where([ ['id' , '<>' ,'0'], ['toshow' , '=' ,'unread'], ]);}

$count=$query->count();

if($dash_id!='all'){$count=$query->where([  ['user_id' , '=' ,$dash_id],  ])->count();}

return $count;

        }
    }







    if(! function_exists('notfound_domain') ) {
        function notfound_domain($external , $error, $data)
        {

        if($external=='api'){
            return $men=Error_Namesilo($data['operator'] , $error  );
        }
        if($external=='web'){
        Alert::error('متاسفانه دامنه شما پیدا نشد  ', ' دامنه وجود ندارد');
        return back()->with([  'webservice_id' => $data['webservice_id'] , 'error' => '1'  , 'domain' => $data['origindomain'] ]);
             }


         }
    }





    if(! function_exists('now_time') ) {
        function now_time( $value)
        {
            return now()->addYears($value)->format('Y-m-d');
        }
    }



    if(! function_exists('time_fake') ) {
        function time_fake( $endtime ,$value)
        {


            $modifier= '-'.$value.' days';
            $modifier .= '-9 hourse';
        $date = strtotime($endtime);
        $newdate = date('Y-m-d h:i',strtotime($modifier,$date));
        return $newdate;

        }
    }


    if(! function_exists('renew_time') ) {
        function renew_time( $endtime ,$value)
        {


        $modifier=$value.' years';
        $date = strtotime($endtime);
        $newdate = date('Y-m-d',strtotime($modifier,$date));
        return $newdate;

        }
    }



    if(! function_exists('all_request_domain') ) {
        function all_request_domain( $request)
        {


            $rulle=ruledomain($request);
            $orginaldomain=linkdomain($request->searchdomain , $request->suffix  );
            $domain=linkdomainOrigin($request->searchdomain , $request->suffix  );
            $multidomain=multidomain($domain , $orginaldomain  );

            $data = $request->all();
            $data['operator']= 'checkRegisterAvailability';
            $data['origindomain']= $orginaldomain;
            $data['withperfix']= $domain;
            $data['multidomain']= $multidomain['AllDomain'];
            $data['CountWhile']= $multidomain['CountWhile'];
            $data['code']= Str::random(40);
            if(Auth::guard('user')->user()){ $data['user_id']= Auth::guard('user')->user()->id;}
            $data['name']= $orginaldomain;
            $data['link']= $orginaldomain;
            $data['status']= 'checkRegisterAvailability';


        Webservice::create($data);


        $webservice=Webservice::where('code' , $data['code'])->first();
        $data['webservice_id']=$webservice->id;
        // $data['multidomain']=$request->multidomain;

        return $data;


        }
    }






if(! function_exists('validate_domain') ) {
    function validate_domain(Request $request)
    {


        $regec_pers = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','regec_pers')] ,
        ]);

        $www = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
        ]);

        $http = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','http')] ,
        ]);

        $https = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','https')] ,
        ]);

        $regec_eng = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','regec_eng')] ,
        ]);



        if (($regec_pers->fails())||($www->fails())||($http->fails())||($https->fails())||($regec_eng->fails())) {
            return 'invalid';
        }else{   return 'ok';  }

    }
}


}
