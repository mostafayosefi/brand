@component('admin.layouts.content',[
    'title'=>'مدیریت محتوای وب سرویس',
    'tabTitle'=>'مدیریت محتوای وب سرویس ',
    'breadcrumb'=>[
            ['title'=>'   مدیریت محتوای وب سرویس  ','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست  محتوا وب سرویس</h6>
          <div class="table-responsive">

@if($textwebservices)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام وب سرویس  </th>
                  <th>دسته وب سرویس  </th>
                  <th>ویرایش</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($textwebservices as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->title}}</td>
                    <td>{{$admin->categoryapi->name}}</td>
 <td>


<a href="{{ route('admin.content.webservice.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>

<td>

    @php $admin['title'] = $admin->title;  @endphp
    @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.content.webservice.destroy', $admin) , 'myname' => $admin->title ])

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
