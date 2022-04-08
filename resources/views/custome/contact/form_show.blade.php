


@if($oper=='contact')
<div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">


        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="card-header card-header-border-bottom">
                        <h4>مشاهده اکانت </h4>
                    </div>
<br>
<table class="table table-bordered">
<thead>
<tr>
  <th>
      #
  </th>
  <th>
      <a href="{{route('user.contact.edit' , $contact->id)}}">
          ویرایش اطلاعات اکانت    <i data-feather="edit"></i></a>
  </th>
</tr>
</thead>

<tbody>
<tr>
  <td>Firstname</td>
  <td> {{ $contact->firstname }}</td>
</tr>
<tr>
  <td>Lastname</td>
  <td> {{ $contact->lastname }}</td>
</tr>
<tr>
  <td>Nikname</td>
  <td> {{ $contact->nikname }}</td>
</tr>
<tr>
  <td>Phone</td>
  <td> {{ $contact->phone }}</td>
</tr>
<tr>
  <td>Email</td>
  <td> {{ $contact->email }}</td>
</tr>
<tr>
  <td> Zip Code/Postal</td>
  <td> {{ $contact->zip }}</td>
</tr>
<tr>
  <td> State/Province/Territory</td>
  <td> {{ $contact->state }}</td>
</tr>
<tr>
  <td>Address</td>
  <td> {{ $contact->adress }}</td>
</tr>
<tr>
  <td>Country</td>
  <td> {{ $contact->country }}</td>
</tr>
<tr>
  <td>City</td>
  <td> {{ $contact->city }}</td>
</tr>
<tr>
  <td>Company</td>
  <td> {{ $contact->company }}</td>
</tr>
<tr>
  <td> Address 2</td>
  <td> {{ $contact->adres2 }}</td>
</tr>
<tr>
  <td> .US Nexus Categories</td>
  <td> {{ $contact->nexus }}</td>
</tr>
<tr>
  <td> .US Application Purposes</td>
  <td> {{ $contact->purpose}}</td>
</tr>

<tr>
  <td> Default</td>
  <td> <a href="#" class="">  {{ getstatusdefault($contact->default) }}</a>
      @if($contact->default == 'inactive')
      <a href="{{route('user.contact.default' , $contact )}}" class=""> انتخاب به عنوان دیفالت</a> @endif
  </td>
</tr>


<tr>
  <td>تاریخ ثبت اکانت</td>
<td>{{ date_frmat($contact->created_at) }}</td>
</tr>


{{-- <style>  .fas {  color: red !important; } </style> --}}

<tr>
  <td> Delete</td>
  <td>
      @php $admin = $contact; @endphp

      @include('admin.layouts.table.modal', [$admin ,'route' => route('user.contact.destroy', $admin) , 'myname' => 'حذف اکانت '.$admin->full_name ])

</td>
</tr>

</tbody>
</table>


                </div>
            </div>
        </div>



        <div class="col-md-12 grid-margin stretch-card">
        </div>



    </div>
</div>

@endif


@if ($oper=='order')



<div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">


        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

<br>
<table class="table table-bordered">


<tbody>
<tr>
  <td>Firstname</td>
  <td> {{ $contact->firstname }}</td>
</tr>
<tr>
  <td>Lastname</td>
  <td> {{ $contact->lastname }}</td>
</tr>
<tr>
  <td>Nikname</td>
  <td> {{ $contact->nikname }}</td>
</tr>
<tr>
  <td>Phone</td>
  <td> {{ $contact->phone }}</td>
</tr>
<tr>
  <td>Email</td>
  <td> {{ $contact->email }}</td>
</tr>
<tr>
  <td> Zip Code/Postal</td>
  <td> {{ $contact->zip }}</td>
</tr>
<tr>
  <td> State/Province/Territory</td>
  <td> {{ $contact->state }}</td>
</tr>
<tr>
  <td>Address</td>
  <td> {{ $contact->adress }}</td>
</tr>
<tr>
  <td>Country</td>
  <td> {{ $contact->country }}</td>
</tr>
<tr>
  <td>City</td>
  <td> {{ $contact->city }}</td>
</tr>
<tr>
  <td>Company</td>
  <td> {{ $contact->company }}</td>
</tr>
<tr>
  <td> Address 2</td>
  <td> {{ $contact->adres2 }}</td>
</tr>
<tr>
  <td> .US Nexus Categories</td>
  <td> {{ $contact->nexus }}</td>
</tr>
<tr>
  <td> .US Application Purposes</td>
  <td> {{ $contact->purpose}}</td>
</tr>




</tbody>
</table>


                </div>
            </div>
        </div>




    </div>
</div>



@endif


