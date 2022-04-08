  @component('custome.layouts.content', [
      'title' => 'مشاهده سفارش',
      'tabTitle' => ' مشاهده سفارش',
      'breadcrumb' => [['title' => 'لیست سفارش های من ', 'url' => route('user.order.index')], ['title' => 'مشاهده اکانت  ',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4>مشاهده سفارش </h4>
                              </div>
<br>


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
        <tr>
            <td>نام دامنه</td>
            <td> {{ $order->domain }}</td>
        </tr>
        <tr>
            <td>هزینه دامنه</td>
            <td> {{ $order->price }} ريال</td>
        </tr>


        <tr>
            <td>تاریخ ثبت </td>
            <td>{{ date_frmat($order->created_at) }}</td>
        </tr>

        <tr>
            <td> وضعیت پرداخت</td>
            <td> @include('index.layouts.table.getstatus', ['admin' => $order ,'route' => ''
                ,'type_name' => 'status_order' ]) </td>

        </tr>
        @if ($order->status == 'rezerve')
            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ Mywallet(auth()->guard('user')->user()->id,'mycharge') }} ريال</span>
                </td>
            </tr>

            <tr>
                <td>پرداخت</td>
                <td>



                    <form method="POST" action="{{ route('user.order.payment', $order) }}">
                        @csrf
                        <div class="elementor-form-fields-wrapper elementor-labels-above"
                            style="padding-bottom: 30px;">
                            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                                 <select name="pay" id="form-field-name"
                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                    placeholder="" value="{{ old('pay') }}" aria-required="true">
                                    <option value="online">پرداخت آنلاین</option>
                                    <option value="offline">پرداخت آفلاین</option>
                                    <option value="depo">پرداخت از شارژ حساب</option>
                                </select>
                            </div>

                            <input type="hidden" name="charge" value="{{Mywallet(auth()->guard('user')->user()->id,'mycharge')}}" />
                            <input type="hidden" name="price" value="{{number_format($order->price)}}" />
                            <input type="hidden" name="user_id" value="{{$order->user_id}}" />

@method('PUT')

                            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                                <label> </label>

                    <div class="card-footer">

                                <button type="submit" class="btn btn-primary float-right">پرداخت</button>


                            </div>
                            </div>


                        </div>

                    </form>

                </td>
            </tr>
        @endif



    </tbody>
</table>


                          </div>
                      </div>
                  </div>



                  <div class="col-md-12 grid-margin stretch-card">
                  </div>



              </div>
          </div>
      </div>













      @slot('script')
      @endslot
  @endcomponent
