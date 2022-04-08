@component('index.layouts.content', [
    'title' => 'مشاهده سفارش ',
    'tabTitle' => 'مشاهده سفارش ',
    'breadcrumb' => [['title' => 'مشاهده سفارش ', 'class' => 'active']],
    ])


    @include('index.layouts.navbar_body', [ 'name_nav' => 'order' ])



    <div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar">
        <div class="content-row-wrapper row default">

            <main class="col col-lg-12 col-12 content fullwidth">
                <div class="column-inner">
                    <div
                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">

                        <h1 style="text-align: center;">جزییات سفارش</h1>
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
                                                        <button type="submit" class="elementor-button elementor-size-sm">
                                                            <span>
                                                                <span class=" elementor-button-icon"></span>
                                                                <span class="elementor-button-text">پرداخت
                                                                </span>
                                                            </span>
                                                        </button>

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
            </main>


        </div>
    </div>

    @slot('script')
    @endslot

@endcomponent
