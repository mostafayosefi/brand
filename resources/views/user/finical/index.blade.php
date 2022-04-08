@component('index.layouts.content',[
    'title'=>'مدیریت مالی',
    'tabTitle'=>'مدیریت مالی  ',
    'breadcrumb'=>[
            ['title'=>'مدیریت مالی','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'finical'   ])




 @slot('script')
 @endslot
@endcomponent

