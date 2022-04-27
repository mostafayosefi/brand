
@if($company_request->company_registers)
@foreach ( $company_request->company_registers as $company_register )

<table class="table table-bordered">
    <thead>
        <tr>
            <th> نوع مدرک </th>
            <th> مشاهده </th>
            @if($aroue=='admin')
            <th> حذف </th>
            @endif
        </tr>
    </thead>
    <tbody>

@foreach ( $company_register->company_register_files as $admin )

 <tr>
     <td>{{$admin->type}} </td>
     <td>
         <a href="{{asset($admin->name)}}" target="_blank" >
         <span   class="btn btn-primary">مشاهده فایل</span>
        </a>
        </td>

        @if($aroue=='admin')
     <td>
        @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.company.request.register.destroy', $admin->id) , 'myname' => 'حذف مدرک '.$admin->type ])

     </td>
     @endif
 </tr>
@endforeach

</tbody>
</table>

@if($aroue=='admin')
@include('admin.company.request.recerve.modal_upload', [ 'route' =>  route('admin.company.request.register.store.file' , [ $company_register]) , ])
@endif

@endforeach
@endif
