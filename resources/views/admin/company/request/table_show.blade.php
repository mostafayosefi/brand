@slot('style')
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">
    <script>
        function fetch_select3(val) {
            var val = document.getElementById("payment").value;
            $.ajax({
                type: 'get',
                url: '/fetch/payment/company_request/{{ $company_request->id }}/' + val + '',
                data: {
                    get_option: val
                },
                success: function(response) {
                    document.getElementById("view_payment").innerHTML = response;
                }
            });
        }
    </script>
@endslot





<div class="row inbox-wrapper">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 email-content">
                        <div class="email-list">




                            @if ($aroue == 'admin')
                                <div class="email-list-item email-list-item">
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <span class="from"> کاربر</span>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <p class="msg"> {{ $company_request->user->name }} </p>
                                    </div>
                                </div>
                            @endif

                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> پلان</span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">{{ $company_request->company_plan->name }}</p>
                                </div>
                            </div>



                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> نوع شرکت</span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->company_type->name }}</p>
                                </div>
                            </div>


                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> نام شرکت درخواستی </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->name }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> هزینه به ریال </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ flage_price($company_request->price) }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> تاریخ تولد میلادی </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->birthday }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> ایمیل </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->email }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> کدپیگیری </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->random }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> شماره تلفن </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->tellir }}</p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> کدپستی </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg"> {{ $company_request->codepir }}</p>
                                </div>
                            </div>


                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> آدرس پستی </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">{{ $company_request->adresir }}</p>
                                </div>
                            </div>



                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> آیا قبلا از خدمات ما استفاده کرده اید؟ </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="before" id="before"
                                                value="yes" @if ($company_request->before == 'yes') checked @endif disabled>
                                            بله
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="before" id="before"
                                                value="no" @if ($company_request->before == 'yes') checked @endif disabled>
                                            خیر
                                        </label>
                                    </div>
                                    </p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> چطور با ما آشنا شدید؟ </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">
                                    <div class="form-group">

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="reach" id="reach"
                                                    value="google" @if ($company_request->reach == 'google') checked @endif
                                                    disabled>
                                                گوگل
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="reach" id="reach"
                                                    value="frind" @if ($company_request->reach == 'frind') checked @endif
                                                    disabled>
                                                دوستان
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="reach" id="reach"
                                                    value="internet" @if ($company_request->reach == 'internet') checked @endif
                                                    disabled>
                                                تبلیغات اینترنت
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="reach" id="reach"
                                                    value="other" @if ($company_request->reach == 'other') checked @endif
                                                    disabled>
                                                سایر
                                            </label>
                                        </div>


                                    </div>
                                    </p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> خدماتی که می خواهید استفاده نمایید را لطفا انتخاب
                                        نمایید </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">
                                        @if ($company_request->company_list_services)
                                            @foreach ($company_request->company_list_services as $list)
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="company_service[]"
                                                            value="{{ $list->company_service->id }}"
                                                            @if ($list->show == '1') checked @endif disabled>
                                                        {{ $list->company_service->name }}
                                                    </label>
                                                </div>
                                            @endforeach

                                        @endif
                                    </p>
                                </div>
                            </div>




                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> مدارک آپلود شده توسط کاربر </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">
                                        @if ($company_request->company_files)
                                            @include(
                                                'admin.company.request.listupload',
                                                [$company_request]
                                            )
                                        @endif
                                    </p>
                                </div>
                            </div>



                            @if ($company_request->status == 'waiting')
                                <div class="email-list-item email-list-item">
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <span class="from"> موجودی شارژ حساب من </span>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <p class="msg"><span class="spanstatus spanstatus_primary">
                                            {{ number_format(Mywallet($company_request->user->id, 'mycharge')) }} ريال
                                       </span>
                                        </p>
                                    </div>
                                </div>
                            @endif


                            <div class="email-list-item email-list-item">
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <span class="from"> وضعیت پرداخت </span>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                    <p class="msg">
                                        @include(
                                            'admin.company.request.get_status',
                                            ['admin' => $company_request, 'route' => '']
                                        )

                                    </p>
                                </div>
                            </div>



                            @method('PUT')









                            @if ($aroue == 'user')


                                @php $payment = $company_request->payment;  @endphp
                                @if ($company_request->payment)
                                    @php $payment = $company_request->payment;  @endphp
                                @else
                                    @php $payment = $company_request;  @endphp
                                @endif



                                <div class="email-list-item email-list-item">
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                            <span class="from"> پرداخت </span>
                                    </div>



                                    @if ($company_request->status == 'register')
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                            <p class="msg"> @include(
                                                'admin.company.request.get_status',
                                                ['admin' => $company_request, 'route' => '']
                                            )

                                            </p>
                                        </div>
                                    @endif




                                    @if ($company_request->status != 'register')
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                            <p class="msg">
                                    <form method="POST" action="{{ $route }}" enctype="multipart/form-data"
                                    onsubmit="return Validate(this);">
                                    @csrf
                                    <input type="hidden" name="price" value="{{ $company_request->price }}" />

                                                <select name="type" id="payment" onchange="fetch_select3(this.value);"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="" aria-required="true"
                                                    @if ($company_request->status == 'active' || $company_request->status == 'inactive' || $company_request->status == 'waitpay') disabled @endif>
                                                    <option value="online"
                                                        {{ old('type', $payment->type) == 'online' ? 'selected' : '' }}>
                                                        پرداخت آنلاین </option>
                                                    <option value="offline"
                                                        {{ old('type', $payment->type) == 'offline' ? 'selected' : '' }}>
                                                        پرداخت آفلاین</option>
                                                    <option value="depo"
                                                        {{ old('type', $payment->type) == 'depo' ? 'selected' : '' }}>
                                                        پرداخت از شارژ حساب</option>
                                                </select>
                                                <input type="hidden" name="textUser" value="پرداخت غیرمستقیم" />
                                            <div id="view_payment">
                                                @include('custome.fetch.payment', [
                                                    'oper' => 'requestcompany',
                                                    'order' => $company_request,
                                                    'value' => old('type', $payment->type),
                                                ])
                                            </div>

                                            <input type="hidden" name="charge"
                                            value="{{ Mywallet($company_request->user_id, 'mycharge') }}" />
                                        <input type="hidden" name="user_id" value="{{ $company_request->user_id }}" />
                                        @method('PUT')
                                        @if ($company_request->status == 'waiting')
                                            <button type="submit"  class="btn btn-primary btn-block">پرداخت</button>
                                        @endif
                        </form>
                    </p>
                </div>
            @endif
         </div>
 @endif






                            @if ($aroue == 'admin')

                                <div class="email-list-item email-list-item">
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <span class="from"> عملیات سفارش </span>
                                    </div>
                                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6  ">
                                        <p class="msg">
                                            @if ($company_request->status != 'active')
                                                @php $status=$company_request->status; @endphp
                                                @if ($company_request->status == 'inactive')
                                                    @php $status='reactive'; @endphp
                                                @endif
                                                @if ($company_request->status != 'recerve')
                                                    @include(
                                                        'admin.requestbrand.modal_operation',
                                                        [
                                                            'route' => route(
                                                                'admin.company.request.status',
                                                                ['id' => $company_request->id, $status]
                                                            ),
                                                            'operat' => 'accept',
                                                            'order' => $company_request,
                                                            'nameoper' => status_request_company(
                                                                $company_request->status,
                                                                'nameoper'
                                                            ),
                                                        ]
                                                    )
                                                @endif
                                            @endif
                                            @if ($company_request->status != 'inactive')
                                                @include(
                                                    'admin.requestbrand.modal_operation',
                                                    [
                                                        'route' => route('admin.company.request.status', [
                                                            'id' => $company_request->id,
                                                            'status' => 'inactive',
                                                        ]),
                                                        'operat' => 'cancel',
                                                        'order' => $company_request,
                                                    ]
                                                )
                                            @endif
                                        </p>
                                    </div>
                                </div>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
