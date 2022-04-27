


@if (($company_request->status == 'active')&&($aroue=='admin'))
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                اطلاعات ثبت شده شرکت

            </th>
            <th>
                @include('admin.layouts.errors')

            </th>
        </tr>
    </thead>

    <tbody>
<tr>
<td>ثبت نهایی اطلاعات شرکت</td>
<td>

    @include('admin.company.request.recerve.modal_register', [ 'route' => route('admin.company.request.register.store' , [ $company_request]) ,
      'order'=>$company_request    ])

</td>
</tr>


</tbody>
</table>

</div>
</div>
@endif


@if($company_request->company_registers)
@foreach ( $company_request->company_registers as $company_register )

<table class="table table-bordered">
    <thead>
        <tr>
            <th>  اطلاعات ثبت شده شرکت </th>
            <th> # </th>
        </tr>
    </thead>
    <tbody>
 <tr>
     <td> شماره Number </td>
     <td>{{$company_register->number}}</td>
 </tr>
 <tr>
     <td>    کدانتقال  </td>
     <td>{{$company_register->authcode}}</td>
 </tr>
 <tr>
     <td>     تاریخ اکسپایر   </td>
     <td>{{$company_register->dateconfermation}}</td>
 </tr>
 <tr>
     <td>     آدرس office ثبت شده </td>
     <td>{{$company_register->office}}</td>
 </tr>

 @if($aroue=='admin')

 <tr>
     <td>     ویرایش اطلاعات ثبت شده </td>
     <td>

    @include('admin.company.request.recerve.modal_edit', [ 'route' => route('admin.company.request.register.store' , [ $company_register->company_request]) ,
    'order'=>$company_register  ,  'aroue' => 'admin'  ])
     </td>
 </tr>

 @endif


</tbody>
</table>
@endforeach
@endif
