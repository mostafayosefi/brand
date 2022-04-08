@component('index.layouts.content',[
    'title'=>'مدیریت گواهی Ssl',
    'tabTitle'=>'مدیریت گواهی Ssl  ',
    'breadcrumb'=>[
            ['title'=>'مدیریت گواهی Ssl','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'ssl'   ])




 @slot('script')
 @endslot
@endcomponent

