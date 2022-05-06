@component('admin.layouts.content',[
    'title'=>'مدیریت درخواست های ثبت شرکت',
    'tabTitle'=>'مدیریت درخواست های ثبت شرکت  ',
    'breadcrumb'=>[
            ['title'=>'مدیریت درخواستهای ثبت شرکت','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">مدیریت درخواستهای ثبت شرکت</h6>
          <div class="table-responsive">





@if($company_requests)
<table id="dataTableExample" class="table">
  <thead>
    <tr>
        <th>  ردیف </th>
        <th>   کاربر </th>
        <th>   نام شرکت </th>
        <th>   کدپیگیری   </th>
        <th>   هزینه </th>
        <th> تاریخ ثبت </th>
        <th> وضعیت</th>
         <th> حذف</th>
    </tr>
  </thead>
  <tbody>


@foreach($company_requests as $key => $admin)


@php $route_show=route('admin.company.request.show', $admin->id);
 $route_destroy=route('admin.company.request.destroy', $admin->id);  @endphp


    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$admin->user->name}}</td>
        <td>{{$admin->name}}</td>
        <td>{{$admin->random}}</td>

        <td> {{flage_price($admin->price)}}</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
<td> <a href="{{$route_show}}"> @include('admin.company.request.get_status', [$admin ,'route' => ''    ]) </a> </td>

<td>
@if(($admin->status=='active')||($admin->status=='waitpay'))
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
