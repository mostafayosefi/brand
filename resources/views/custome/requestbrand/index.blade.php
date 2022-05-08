@component('custome.layouts.content',[
    'title'=>'مدیریت درخواست های برند',
    'tabTitle'=>'مدیریت درخواست های برند  ',
    'breadcrumb'=>[
            ['title'=>'مدیریت درخواستهای برند','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">مدیریت درخواستهای برند</h6>
          <div class="table-responsive">





@if($requestbrands)
<table id="dataTableExample" class="table">
  <thead>
    <tr>
        <th>  ردیف </th>
        <th>   برند </th>
        <th>   کدپیگیری   </th>
        <th>   هزینه </th>
        <th> تاریخ ثبت </th>
        <th> وضعیت</th>
         <th> حذف</th>
    </tr>
  </thead>
  <tbody>


@foreach($requestbrands as $key => $admin)


@php $route_show=route('user.requestbrand.show', $admin->id);
 $route_destroy=route('user.domain.basket.destroy', $admin->id);  @endphp


    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$admin->name}}</td>
        <td>{{$admin->random}}</td>

        <td> {{flage_price($admin->price)}}</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
<td> <a href="{{$route_show}}">  @include('admin.layouts.table.getstatus_requestbrand', [$admin ,'route' => ''  ,'type_name' => 'requestbrand'   ]) </a> </td>


<td>
    @if(($admin->status=='active')||($admin->status=='waitpay')||($admin->status=='recerve'))
    -
    @else
    @include('admin.layouts.table.modal', [$admin ,'route' => $route_destroy , 'myname' => 'حذف سفارش '.$admin->domain ])
    @endif
</td>




    </tr>
@endforeach



  </tbody>
</table>

@endif


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
