@if($name=='requestbrand')

<h2>مشاهده اطلاعات ثبت سفارش برند </h2>
<p class="has-text-align-center">لطفا جهت تغییرات در سفارش قبلا به سیستم لاگین کرده باشید</p>
<figure class="wp-block-table">
    <table id="dataTableExample" class="table">

        <tbody>


            <tr>
                <td> <strong>ردیف</strong> </td>
                <td> <strong>کاربر</strong> </td>
                <td> <strong>نام برند</strong> </td>
                <td> <strong>هزینه</strong> </td>
                <td> <strong>تاریخ ثبت</strong></td>
                <td> <strong>وضعیت</strong></td>
            </tr>

            @php $route_show=route('user.requestbrand.show', $tracking->id);  @endphp


            <tr>
                <td>1</td>
                <td>{{ $tracking->user->name }}</td>
                <td>{{ $tracking->name }}</td>

                <td> {{ flage_price($tracking->price) }}</td>
                <td>{{ date_frmat($tracking->created_at) }}</td>
                <td> <a href="{{ $route_show }}"> @include(
                    'admin.layouts.table.getstatus_requestbrand',
                    [
                        'admin' => $tracking,
                        'route' => '',
                        'type_name' => 'requestbrand',
                    ]
                ) </a> </td>



            </tr>

        </tbody>
    </table>
</figure>

@endif
@if($name=='requestcompany')

<h2>مشاهده اطلاعات ثبت سفارش شرکت </h2>
<p class="has-text-align-center">لطفا جهت تغییرات در سفارش قبلا به سیستم لاگین کرده باشید</p>
<figure class="wp-block-table">
    <table id="dataTableExample" class="table">

        <tbody>


            <tr>
                <td> <strong>ردیف</strong> </td>
                <td> <strong>کاربر</strong> </td>
                <td> <strong>نام شرکت</strong> </td>
                <td> <strong>هزینه</strong> </td>
                <td> <strong>تاریخ ثبت</strong></td>
                <td> <strong>وضعیت</strong></td>
            </tr>


            @php $route_show=route('user.company.request.show', $tracking->id);
             @endphp


               <tr>
                   <td>1</td>
                   <td>{{$tracking->user->name}}</td>
                   <td>{{$tracking->name}}</td>
                   <td> {{flage_price($tracking->price)}}</td>
                   <td>{{ date_frmat($tracking->created_at) }}</td>
           <td> <a href="{{$route_show}}">  @include('admin.layouts.table.getstatus_requestbrand', ['admin' => $tracking,'route' => ''  ,'type_name' => 'requestbrand'   ]) </a> </td>



               </tr>

        </tbody>
    </table>
</figure>

@endif
