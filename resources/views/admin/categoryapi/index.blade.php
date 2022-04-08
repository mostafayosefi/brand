@component('admin.layouts.content',[
    'title'=>'مشاهده دسته بندی وب سرویس',
    'tabTitle'=>'مشاهده دسته بندی وب سرویس ',
    'breadcrumb'=>[
            ['title'=>'مشاهده دسته بندی وب سرویس','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست دسته بندی وب سرویس</h6>
          <div class="table-responsive">

@if($categoryapis)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th> دسته بندی وب سرویس</th>
                  <th> داکیومنت</th>
                  <th>تاریخ ایجاد</th>
                  <th>ویرایش</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($categoryapis as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->document->documentname}}</td>
                    <td>{{ date_frmat($admin->created_at) }}</td>
                  <td>


<a href="{{ route('admin.content.categoryapi.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>
<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.content.categoryapi.destroy', $admin) , 'myname' => $admin->name ])

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
