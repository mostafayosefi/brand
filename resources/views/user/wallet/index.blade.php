@component('index.layouts.content', [
    'title' => 'مدیریت کیف پول',
    'tabTitle' => 'مدیریت کیف پول ',
    'breadcrumb' => [['title' => 'مدیریت کیف پول', 'class' => 'active']],
    ])


    @include('index.layouts.navbar_body', [ 'name_nav' => 'wallet' ])


    <div class="elementor-element elementor-element-c438a9c elementor-widget elementor-widget-rt-heading" data-id="c438a9c"
        data-element_type="widget" data-widget_type="rt-heading.default">
        <div class="elementor-widget-container">
            <div class="rt-heading-wrapper style-3 text-center">
                <H2 class="   rt-heading style-3">مشاهده تراکنشها </H2>
            </div>
        </div>
    </div>




    <div data-elementor-type="wp-page" data-elementor-id="2792" class="elementor elementor-2792"
        data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2279b4e elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="2279b4e" data-element_type="section"
                    data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <table class="table table-bordered "   >
                                <thead>
                                    <tr>
                                        <th> افزایش اعتبار  </th>
                                        <th> هزینه خرید </th>
                                        <th> موجودی حساب</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{number_format(Mywallet($user_id,'inc'))}} ريال</td>
                                        <td> {{number_format(Mywallet($user_id,'dec'))}}  ريال</td>
                                        <td> <span class="spanstatus spanstatus_primary">  {{number_format(Mywallet($user_id,'mycharge'))}}  ريال</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>



                <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2279b4e elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                data-id="2279b4e" data-element_type="section"
                data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">




                            @if ($wallets)
                            <table id="tablepress-1" class="tablepress tablepress-id-1">
                                <thead>
                                    <tr class="row-1 odd">

                                        <th class="column-1">ردیف</th>
                                        <th class="column-2">مبلغ</th>
                                        <th class="column-2">نوع تراکنش</th>
                                        <th class="column-3">تاریخ تراکنش</th>
                                        <th class="column-4">وضعیت</th>


                                    </tr>
                                </thead>
                                <tbody class="row-hover">


@foreach ($wallets as $key=> $admin )
<tr class="gradeX">
    <td>{{$key +1}}</td>
    <td>{{number_format($admin->price)}} ريال</td>
    <td> <a href=""> @include('index.layouts.table.getstatus', [$admin ,'route' => ''  ,'type_name' => 'flag_wallet'   ]) </a> </td>
    <td>{{ date_frmat($admin->created_at) }}</td>
    <td> <a href=""> @include('index.layouts.table.getstatus', [$admin ,'route' => '' ,'type_name' => 'status_wallet'   ]) </a> </td>
</tr>
@endforeach
                                </tbody>
                            </table>

                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @slot('script')
    @endslot
@endcomponent
