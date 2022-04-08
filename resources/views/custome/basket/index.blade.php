@component('custome.layouts.content',[
    'title'=>'مشاهده سفارش خرید دامنه',
    'tabTitle'=>'مشاهده سفارش خرید دامنه',
    'breadcrumb'=>[
            ['title'=>'مشاهده سفارش خرید دامنه','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">مشاهده سفارش خرید دامنه</h6>
          <div class="table-responsive">
@include('custome.order.table_index', [   'orders' => $orders  , $contacts , 'tablee' => 'basket'])
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
