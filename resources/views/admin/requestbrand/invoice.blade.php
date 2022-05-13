
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid d-flex justify-content-between">
                    <div class="col-lg-4 pl-0">

   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $setting->logo , 'class'=>'rounded-circle wd-35' , 'style' => 'height: 100px;width: 100px;'  ])

                      <p class="mt-1 mb-1"><b>  {{$setting->title}}  </b></p>
                      <p>{{$setting->address}} </p>
                      <h5 class="mt-5 mb-2 text-muted">فاکتور به : </h5>
                      <p>  {{$requestbrand->user->name}} ،<br>  {{$requestbrand->user->address}}</p>
                    </div>
                    <div class="col-lg-4 pr-0">
                      <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">فاکتور</h4>
                      <h6 class="text-right mb-5 pb-4">INV-002308 #</h6>
                      <p class="text-right mb-1">  هزینه کل فاکتور</p>
                      <h4 class="text-right font-weight-normal">
                        {{flage_price($requestbrand->price)}}
                      </h4>
                      <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">تاریخ فاکتور :
                        </span>{{ date_frmat_mnth($requestbrand->created_at) }}</h6>

                    </div>
                  </div>

@if($requestbrand->requestbrand_list_subcategories)
                  <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                    <div class="table-responsive w-100">
                        <h5>جزییات فاکتور طبقات</h5>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>طبقه</th>
                            <th class="text-right">خدمات</th>
                            <th class="text-right">هزینه  </th>
                          </tr>
                        </thead>
                        <tbody>


@foreach ( $requestbrand->requestbrand_list_subcategories as $key => $admin )
@if($admin->show=='1')
<tr class="text-right">
    <td class="text-right">{{$key+1}}</td>
    <td class="text-right">{{$admin->subcategorybrand->name}} </td>
    <td class="text-right">  @php echo $admin->subcategorybrand->text; @endphp    </td>
    <td>
        @if($key=='1')
        <span class="spanstatus spanstatus_warning">
                هزینه اولین طبقه رایگان می باشد
             </span>
        @else

        {{flage_price($setting->mngfinical->priceplan)}}
        @endif
    </td>
  </tr>
@endif
 @endforeach
                        </tbody>
<tfoot>
    <tr class="table-info">
<td>#</td>
<td><b>هزینه کل فاکتور طبقات</b></td>
<td></td>
<td><b>
    {{flage_price(sumpricereqbrand($requestbrand->id,'sumsub'))}}
</b></td>
    </tr>
</tfoot>

                      </table>
                    </div>
                  </div>
@endif




@if($requestbrand->listservicebrands)
                  <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                    <div class="table-responsive w-100">
                        <h5>جزییات فاکتور خدمات اضافی</h5>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th class="text-right">نام سرویس</th>
                            <th class="text-right">هزینه  </th>
                          </tr>
                        </thead>
                        <tbody>

@foreach ( $requestbrand->listservicebrands as $key => $admin )
@if($admin->show=='1')

                          <tr class="text-right">
                            <td class="text-right">{{$key+1}}</td>
                            <td class="text-right">{{$admin->servicebrand->name}} </td>
                            <td class="text-right">{{flage_price($admin->servicebrand->price)}}</td>
                          </tr>
@endif
 @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-info">
                        <td>#</td>
                        <td><b>هزینه کل فاکتور سرویس ها</b></td>
<td><b>
    {{flage_price(sumpricereqbrand($requestbrand->id,'sumservice'))}}
</b></td>
                            </tr>
                        </tfoot>

                      </table>
                    </div>
                  </div>
@endif


                  <div class="container-fluid mt-5 w-100">
                    <div class="row">
                      <div class="col-md-6 mr-auto">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>

                              <tr>
                                <td>هزینه طبقات</td>
                                <td class="text-left">
                                    {{flage_price(sumpricereqbrand($requestbrand->id,'sumsub'))}}
                                </td>
                              </tr>
                              <tr>
                                <td class="text-bold-800">  هزینه سرویس ها</td>
                                <td class="text-bold-800 text-left">
                                    {{flage_price(sumpricereqbrand($requestbrand->id,'sumservice'))}}
                                </td>
                              </tr>
                              <tr class="bg-light">
                                <td class="text-bold-800">مبلغ قابل پرداخت</td>
                                <td class="text-bold-800 text-left">
                                    {{flage_price($requestbrand->price)}}
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="container-fluid w-100">
                    <a href="#" class="btn btn-primary float-left mt-4 mr-2"><i data-feather="send"
                        class="ml-2 icon-md"></i>ارسال فاکتور</a>
                    <a href="#" class="btn btn-outline-primary float-left mt-4"><i data-feather="printer"
                        class="ml-2 icon-md"></i>چاپ</a>
                  </div> --}}

                </div>
              </div>
            </div>
          </div>
