@component('custome.layouts.content',[
    'title'=>'سفارش های من ',
    'tabTitle'=>'سفارش های من',
    'breadcrumb'=>[
            ['title'=>'سفارش های من','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">سفارش های من</h6>
          <div class="table-responsive">
@include('custome.order.table_index', [   'orders' => $orders    , 'tablee' => 'order'])
          </div>
        </div>
      </div>
    </div>
  </div>


    @slot('script')

     <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
