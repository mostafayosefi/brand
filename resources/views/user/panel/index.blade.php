@component('index.layouts.content',[
    'title'=>'مشاهده پنل',
    'tabTitle'=>'مشاهده پنل  ',
    'breadcrumb'=>[
            ['title'=>'مشاهده پنل','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'panel'   ])




 @slot('script')
 @endslot
@endcomponent

