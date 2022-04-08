

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">



@endslot







<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>

            </th>
        </tr>
    </thead>

    <tbody>

        @include('admin.layouts.errors')


        <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
            @csrf
        @if($aroue=='admin')
        <tr>
           <td>کاربر</td>
           <td> {{ $nameserver->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام دامنه</td>
            <td> {{ $nameserver->domain }}</td>
        </tr>






        <tr>
            <td>تنظیمات Dns  </td>
            <td style="direction: ltr;">

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('ns1') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 1</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="ns1"  id="ns1" type="text" placeholder="ns1.example.com"
                    value="{{old('ns1', $nameserver->ns1)}}" @if (($nameserver->status == 'active')||($nameserver->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('ns2') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 2</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="ns2"  id="ns2" type="text" placeholder="ns2.example.com"
                        value="{{old('ns2', $nameserver->ns2)}}" @if (($nameserver->status == 'active')||($nameserver->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('ns3') ? 'red' : '' }}"  >Name Server 3</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="ns3"  id="ns3" type="text" placeholder="ns3.example.com"
                        value="{{old('ns3', $nameserver->ns3)}}" @if (($nameserver->status == 'active')||($nameserver->status == 'waiting')) disabled @endif  >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('ns4') ? 'red' : '' }}"  >Name Server 4</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="ns4"  id="ns4" type="text" placeholder="ns4.example.com"
                        value="{{old('ns4', $nameserver->ns4)}}" @if (($nameserver->status == 'active')||($nameserver->status == 'waiting')) disabled @endif   >
                    </div>
                </div>

            </td>
        </tr>


        <input type="hidden" name="domain" value="{{$nameserver->domain}}"  />


@method('PUT')








        @if($aroue=='user')

        <tr>

            <td>عملیات تغییر نیم سرور    </td>
            <td>


                @if (($nameserver->status != 'active'))
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">تغییر نیم سرور  </button>
                </div>
                @endif
            </td>
        </tr>
        @endif





        <tr>
            <td> وضعیت تغییر نیم سرور</td>
            <td>

 @include('index.layouts.table.getstatus', ['admin' => $nameserver ,'route' => ''
   ,'type_name' => 'status_domain' ])

</td>
        </tr>


    </form>







    </tbody>
</table>
