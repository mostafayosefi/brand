  @component('admin.layouts.content', [
      'title' => 'مشاهده اطلاعات اکانت',
      'tabTitle' => 'مشاهده اطلاعات اکانت',
      'breadcrumb' => [['title' => 'مشاهده اکانت های کاربران ', 'url' => route('admin.contact.index')], ['title' => 'اطلاعات اکانت کاربر',
      'class' => 'active']],
      ])


@slot('style')
@endslot

      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-1 grid-margin stretch-card">
                  </div>


                  <div class="col-md-10 grid-margin stretch-card">



                    <div class="card">
                        <div class="card-body">


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
#                                 </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>کاربر</td>
                                <td> {{ $contact->user->name }}</td>
                            </tr>
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
                                <td>تاریخ ثبت اکانت</td>
<td>{{ date_frmat($contact->created_at) }}</td>
                            </tr>



                        </tbody>
                    </table>









{{--



                              <div class="card-header card-header-border-bottom">
                                  <h4>اطلاعات اکانت کاربر </h4>
                              </div>



                              <div class="row" >
                                <div class="col-8 col-xl-8 ">
                            <ul class="list-group">
                                <li class="list-group-item active">  {{  $contact->nikname }} </li>
                                <li class="list-group-item  "> {{  $contact->nikname }} </li>

                              </ul>
                            </div>
                            <div class="col-4 col-xl-4  ">
                                <ul class="list-group">
                                    <li class="list-group-item  active"> هزینه دلاری</li>
                                    <li class="list-group-item  "> {{  $contact->nikname }} </li>
                                </ul>
                            </div>
                            </div>



                            <div class="row" >
                                <div class="col-12 col-xl-12 ">
                            <ul class="list-group">
                                <li class="list-group-item active"> کاربر :  {{  $contact->user->name }} </li>
                              </ul>
                            </div>
                            </div>


 --}}



</div>
</div>

                  </div>



                  <div class="col-md-1 grid-margin stretch-card">
                  </div>



              </div>
          </div>
      </div>













      @slot('script')
      @endslot
  @endcomponent
