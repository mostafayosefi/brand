@component('index.layouts.content',[
    'title'=>'پروفایل ',
    'tabTitle'=>'پروفایل',
    'breadcrumb'=>[
            ['title'=>'پروفایل','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'profile'   ])



 @slot('script')
 @endslot


 @endcomponent
