
@if($company_request->company_files)

<table class="table table-bordered">
    <thead>
        <tr>
            <th> مشاهده </th>

        @if($aroue=='admin')
            <th> حذف </th>
            @endif
        </tr>
    </thead>
    <tbody>

@foreach ($company_request->company_files  as $admin )

 <tr>
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

 @endif
