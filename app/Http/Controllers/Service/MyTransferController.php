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
use App\Models\Transfer;

class MyTransferController extends Controller
{

    public function __construct($external)
    {
        $this->external = $external;
    }

    


    public function checkTransferStatus(  $data ){
        $array = data_build_query_array('domain' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array; 

$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='300') {
    $output['code']=$code;
    $output['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){

  Alert::error(  ' مشکلی در انتقال دامنه به وجود آمد ',  'متاسفانه این دامنه قابلیت انتقال ندارد      ' .$error );
//   return back();

$transfer=query_table_transfer($data); 
 return redirect()->route('user.domain.transfer.show' , $transfer );    


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
        $transfer=query_table_transfer($data); 
        Alert::success('دامنه متعلق به شماست و قابلیت انتقال را دارد    ', 'دامنه آماده انتقال میباشد');
        return redirect()->route('user.domain.transfer.show' , $transfer );    }
}


}


    public function transferDomain(  $data ){
        $array = data_build_query_array('domain' , $data);
        $myurl = data_build_query('api/' , $data).'&'.$array; 
 

$resource = Psr7\Utils::tryFopen($myurl, 'r');
$stream = Psr7\Utils::streamFor($resource);
$xml = simplexml_load_string($stream);
$code=$xml->reply->code;
$output=array();
if ( $code!='300') {
    $output['code']=$code;
    $output['detail']=$xml->reply->detail;
    $error=$output['detail'];
    if($this->external=='api'){
        return $men=Error_Namesilo($data['operator'] , $error  );

      }
    if($this->external=='web'){
  Alert::error(  ' مشکلی در انتقال دامنه به وجود آمد ',  'متاسفانه قابلیت انتقال وجود ندارد      ' .$error );
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
        $transfer=query_table_transfer($data); 
        $data['status']='active';
        $transfer->update([  'status' => $data['status']    ]);
        
        Alert::success('دامنه متعلق به شماست و با موفقیت منتقل شد       ', 'دامنه باموفقیت منتقل شد  ');
        return redirect()->route('user.domain.transfer.show' , $transfer );    }
}


}




}
