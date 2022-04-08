@component('custome.layouts.content',[
    'title'=>'اکانت های من ',
    'tabTitle'=>'اکانت های من',
    'breadcrumb'=>[
            ['title'=>'اکانت های من','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">اکانت های من</h6>
          <div class="table-responsive">

@if($contacts)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                    <th>  ردیف </th>
                    <th>  NikName  </th>
                    <th>  FullName </th>
                     <th>  تاریخ ایجاد </th>
                    <th>  Default </th>
                    <th> مشاهده</th>
                    <th> ویرایش</th>
                    <th> حذف</th>

                </tr>
              </thead>
              <tbody>


@foreach($contacts as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>


<td>{{$admin->nikname}}  </td>
<td>{{$admin->full_name}}  </td>
 <td>{{ date_frmat($admin->created_at) }}</td>

<td><a href="{{route('user.contact.default' , $admin )}}" class="">  {{ getstatusdefault($admin->default) }}</a></td>
<td>
    <a href="{{ route('user.contact.show', $admin) }}">
        <span class="btn btn-primary" >  <i data-feather="eye"></i></span>
        </a>

</td>
    <td>
         <a href="{{ route('user.contact.edit', $admin) }}">
            <span class="btn btn-primary" >  <i data-feather="edit"></i></span>
            </a>
    </td>


        <td>
            @php $admin['title'] = $admin->question;  @endphp
            @include('admin.layouts.table.modal', [$admin ,'route' => route('user.contact.destroy', $admin) , 'myname' => 'حذف اکانت '.$admin->full_name ])
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

    <script src="{{ asset('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
