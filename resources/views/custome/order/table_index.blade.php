



@if($orders)
<table id="dataTableExample" class="table">
  <thead>
    <tr>
        <th>  ردیف </th>
        <th>  نام دامنه </th>
        <th>  هزینه </th>
        <th> تاریخ ثبت </th>
        <th> وضعیت</th>
         <th> حذف</th>
    </tr>
  </thead>
  <tbody>


@foreach($orders as $key => $admin)
 
 
@php $route_show=route('user.domain.basket.show', $admin->id);
 $route_destroy=route('user.domain.basket.destroy', $admin->id);  @endphp
 

    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$admin->domain}}</td>
        <td>{{number_format($admin->price)}} ريال</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
<td> <a href="{{$route_show}}"> @include('index.layouts.table.getstatus', [$admin ,'route' => ''  ,'type_name' => 'status_domain'   ]) </a> </td>

<td>
    @if($admin->status!='active')

@include('admin.layouts.table.modal', [$admin ,'route' => $route_destroy , 'myname' => 'حذف سفارش '.$admin->domain ])
@else
-
@endif
</td>



    </tr>
@endforeach



  </tbody>
</table>

@endif
