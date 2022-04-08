<?php

namespace App\Http\Controllers\Service;



use GuzzleHttp\Psr7;
use App\Models\Domain;
use App\Models\Checkdomain;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Resources\WebserviceCollection;
use App\Http\Resources\CheckdomainCollection;

class RegisterDomainController extends Controller
{


    public function __construct($external)
    {
        $this->external = $external;
    }


    public function registerDomain(  $data ){
        $array = data_build_query_array('domain' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array;

$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='301') {
    $output['code']=$code;
    $output['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){
  Alert::error(  ' مشکلی در ثبت اطلاعات به وجود آمد ',  'متاسفانه اطلاعات ثبت نشد' .$error );
  return back();
}

    return $output;
}else{
    //success
     $output['code']=$code;
    $data['message']=$xml->reply->message;
    if($this->external=='api'){
        return new CheckdomainCollection(Checkdomain::where('webservice_id' , $data['webservice_id'])->orderBy('type' ,'asc')->get());
      }
    if($this->external=='web'){
        $domain=Domain::find($data['domain_id']);
        $domain->update([ 'status' => $data['status']]);
        Alert::success('دامنه جدید موفقیت ثبت شد', 'دامنه جدید شما با موفقیت ثبت شد');
        return back();
    }
}


}




}
