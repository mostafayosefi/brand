@component('index.layouts.content',[
    'title'=>'مدیریت سفارشات من',
    'tabTitle'=>'مدیریت سفارشات من',
    'breadcrumb'=>[
            ['title'=>'مدیریت سفارشات من','class' => 'active']
    ]])

@slot('style')

@endslot

@include('index.layouts.navbar_body', [  'name_nav' => 'order'   ])




<div class="elementor-element elementor-element-c438a9c elementor-widget elementor-widget-rt-heading" data-id="c438a9c"
data-element_type="widget" data-widget_type="rt-heading.default">
<div class="elementor-widget-container">
    <div class="rt-heading-wrapper style-3 text-center">
        <H2 class="   rt-heading style-3">مدیریت سفارشات من</H2>
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




                    @if ($orders)
                    <table id="tablepress-1" class="tablepress tablepress-id-1">
                        <thead>
                            <tr class="row-1 odd">

                                <th>  ردیف </th>
                                <th>  نام دامنه </th>
                                <th>  هزینه </th>
                                <th> تاریخ ثبت </th>
                                <th> وضعیت</th>
                                <th> مشاهده</th>
                                <th> حذف</th>

                            </tr>
                        </thead>
                        <tbody class="row-hover">


@foreach ($orders as $key=> $admin )

<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{$admin->domain}}</td>
    <td>{{number_format($admin->price)}} ريال</td>
    <td>{{ date_frmat($admin->created_at) }}</td>
    <td>{{$admin->status}}</td>
    <td> <a href="{{route('user.order.show' , $admin )}}" class="">   <i aria-hidden="true" class="fas fa-eye"   ></i> </a></td>
    <td>
        @if($admin->status=='rezerve')
        @include('index.layouts.delete_index', [ 'title' => 'حذف سفارش'  , 'route' => route('user.order.destroy',  $admin)])
@else
-
@endif
    </td>


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

