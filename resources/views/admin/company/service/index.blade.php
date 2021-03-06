@component('admin.layouts.content',[
    'title'=>'مشاهده خدمات شرکت',
    'tabTitle'=>' مشاهده خدمات شرکت   ',
    'breadcrumb'=>[
            ['title'=>'مشاهده خدمات شرکت','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست خدمات شرکت      </h6>
          <div class="table-responsive">

@if($company_services)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th> نام خدمات</th>
                  <th> هزینه </th>
                  <th>تاریخ ایجاد</th>
                  <th>ویرایش</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($company_services as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{number_format($admin->price)}} ريال</td>
                    <td>{{ date_frmat($admin->created_at) }}</td>
                  <td>


<a href="{{ route('admin.company.service.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>
<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.company.service.destroy', $admin) , 'myname' => $admin->name ])

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
