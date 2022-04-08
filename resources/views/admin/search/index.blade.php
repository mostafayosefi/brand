@component('admin.layouts.content',[
    'title'=>'مشاهده جستجوی دامنه ها',
    'tabTitle'=>'مشاهده جستجوی دامنه ها ',
    'breadcrumb'=>[
            ['title'=>'مشاهده جستجوی دامنه ها','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست جستجوی دامنه ها</h6>
          <div class="table-responsive">

@if($searchs)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام دامنه</th>
                  <th>تاریخ جستجو</th>
                  <th>مشاهده</th> 
                </tr>
              </thead>
              <tbody>


@foreach($searchs as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->link}}</td> 
                    <td>{{ date_frmat($admin->created_at) }}</td> 
<td>
 

@include('admin.layouts.table.view_search_domain', [$admin ,'route' =>
route('admin.search.index', $admin->id ) , 'myname' => ' نتایج جستجوی دامنه '.$admin->link.' ' ])




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
