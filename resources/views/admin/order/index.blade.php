@component('admin.layouts.content',[
    'title'=>'مشاهده سفارش های کاربران',
    'tabTitle'=>'مشاهده سفارش های کاربران ',
    'breadcrumb'=>[
            ['title'=>'مشاهده سفارش های کاربران','class' => 'active']
    ]])



@slot('style')
<link data-minify="1" rel='stylesheet'   href="{{ asset('telnum_files/mystyle.css') }}"  type='text/css' media='all' />
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot






<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست سفارش های کاربران</h6>
          <div class="table-responsive">







@if($orders)
<table id="dataTableExample" class="table">
  <thead>
    <tr>
        <th>  ردیف </th>
        <th>  کاربر</th>
        <th>  نام دامنه </th>
        <th>  هزینه </th>
        <th> تاریخ ثبت </th>
        <th> وضعیت</th>
         <th> حذف</th>
    </tr>
  </thead>
  <tbody>


@foreach($orders as $key => $admin)




    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$admin->user->name}}</td>
        <td>{{$admin->domain}}</td>
        <td>{{number_format($admin->price)}} ريال</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
<td> <a href="{{route('admin.order.show', $admin->id)}}"> @include('index.layouts.table.getstatus', [$admin ,'route' => ''  ,'type_name' => 'status_domain'   ]) </a> </td>

<td>
@if($admin->status!='active')
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.order.destroy', $admin->id) , 'myname' => 'حذف سفارش '.$admin->domain ])
@else
-
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
