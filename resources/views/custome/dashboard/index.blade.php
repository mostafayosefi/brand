@component('custome.layouts.content',[
    'title'=>'داشبورد من ',
    'tabTitle'=>'داشبورد من',
    'breadcrumb'=>[
            ['title'=>'داشبورد من','class' => 'active']
    ]])



@slot('style')




 @endslot




 <div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">






                    <div class="col-md-4 grid-margin stretch-card">
                        @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard($dash_id,'requestbrand')  , 'title_card' => 'سفارشهای برند کاربر' , 'desc_card' => 'سفارش برند ' ,
            'route_create' => route('user.requestbrand.create')  ,  'route_index' => route('user.requestbrand.index') , 'new_card' =>  count_dashboard($dash_id,'new_requestbrand')." سفارش جدید" ])
                    </div>


                    <div class="col-md-4 grid-margin stretch-card">
                        @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard($dash_id,'company_request')  , 'title_card' => 'سفارشهای ثبت شرکت کاربر' , 'desc_card' => 'سفارش شرکت ' ,
            'route_create' => route('user.company.request.create')  ,  'route_index' => route('user.company.request.index') , 'new_card' =>  count_dashboard($dash_id,'new_company_request')." سفارش شرکت" ])
                    </div>


                    <div class="col-md-4 grid-margin stretch-card">
                        @include('custome.dashboard.card', [  'icon_card' => 'mail'    , 'count_card' => count_dashboard($dash_id,'ticket') , 'title_card' => 'تیکت های من' , 'desc_card' => 'تیکت' ,
                        'route_create' => route('user.ticket.create') ,  'route_index' => route('user.ticket.index') , 'new_card' =>    count_dashboard($dash_id,'ticket')." تیکت جدید"    ])
                    </div>


      </div>
    </div>
  </div>




    @slot('script')
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    @endslot
@endcomponent
