@component('index.layouts.content',[
    'title'=>'خدمات دامنه ',
    'tabTitle'=>'خدمات دامنه',
    'breadcrumb'=>[
            ['title'=>'خدمات دامنه','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'domain'   ])



 @slot('script')
 @endslot


 @endcomponent
