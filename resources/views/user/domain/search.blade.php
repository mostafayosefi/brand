@component('index.layouts.content', [
    'title' => 'بررسی دامنه ',
    'tabTitle' => 'بررسی دامنه ',
    'breadcrumb' => [['title' => 'بررسی دامنه ', 'class' => 'active']],
    ])

@slot('style')

@endslot

@if(isShow(['index.check']))   @endif


<div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            @include('index.layouts.elementor.warp', [ 'id' => '7' ])


            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6d431d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                data-id="6d431d8" data-element_type="section"
                data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">

                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">


                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c06592"
                            data-id="9c06592" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5cbd3b3 elementor-widget elementor-widget-rt-heading"
                                        data-id="5cbd3b3" data-element_type="widget"
                                        data-widget_type="rt-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="rt-heading-wrapper text-center">









                                        <div class="elementor-element elementor-element-412944a elementor-widget elementor-widget-rt-pricing-table"
                                        data-id="412944a" data-element_type="widget"
                                        data-widget_type="rt-pricing-table.default">
                                        <div class="elementor-widget-container">




                                            @if(isShow(['index.check']))
                                            <form class="domain-form" method="post" action="{{route('index.check.post')}}" >
                                                @elseif(isShow(['user.domain.check']))
                                                <form class="domain-form" method="post" action="{{route('user.domain.check.post')}}" >

                                                @endif



                                                <div class="elementor-form-fields-wrapper elementor-labels-above"  >
                                                    <div class="form-group d-md-flex">

                                                        <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                                                @include('index.layouts.errors')
                                                        </div>
                                                        </div>
                                                        </div>

@csrf
                                                <input type="hidden" name="status" value="52">


                                                <div class="elementor-form-fields-wrapper elementor-labels-above"  >
                                                            <div class="form-group d-md-flex">

                                                                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">

                                                        <div
                                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">
                                                                <input type="text" class="form-control px-4" name="searchdomain" placeholder="example.com" dir="ltr" required>


                                                            </div>
                                                            </div>

                                                            <div class="col-md-12 ftco-animate fadeInUp ftco-animated">

                                                        <div
                                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">


                                                            <button type="submit"
                                                            class="search-domain btn btn-primary px-5">
                                                            جستجو
                                                        </button>

                                                            </div>
                                                            </div>


                                                        </div>




                                                        <div class="elementor-element elementor-element-e3e1989 elementor-widget elementor-widget-rt-pricing-table" data-id="e3e1989" data-element_type="widget" data-widget_type="rt-pricing-table.default">
                                                            <div class="elementor-widget-container">
                                                        <div id="" class="pricing_table compare " data-rt-animation-group="group">








                                                            @if($result)


                                            <div id="" class="table_wrap highlight " data-rt-animate="animate" data-rt-animation-type="fadeInDown"><ul>
                                                <li class="caption">
                                               <div class="title"  style="color: #1be42f">دامنه {{session()->get('domain')}} موجود می باشد!
                                               <small style="color: #23dcdc">  &nbsp;</small>
                                               </div>
                                                </li>

                                                       <li class="price">
                                                           <div>
                                                               <span> </span>
                                                           </div>
                                                       </li>


                                               <li class="start_position">

                                                @include('index.layouts.table_listdomain', [  'checkdomains' => $resultdomain   ])




                                            </li>


                                               <li class="buy_position">&nbsp;</li>
                                               <li class="buy_position">دامنه های مشابه</li>

                                               <li class="start_position"  >


                                                @include('index.layouts.table_listdomain', [  'checkdomains' => $checkdomains   ])


                                               </li>

                                               </ul>
                                               </div>

                                            @endif




                                            @include('index.layouts.error_domain')










                                                     </div>
                                                     </div>
                                                     </div>





 @include('user.domain.seemore', [ $contentdomains , 'name_nav' => 'domain'   ])







                                                </div>
                                                        </form>






{{-- --------------------------------- --}}





{{--

                                            @if(isShow(['index.check']))
                                            <form class="elementor-form" method="post" action="{{route('index.check.post')}}" >
                                                @elseif(isShow(['user.domain.check']))
                                                <form class="elementor-form" method="post" action="{{route('user.domain.check.post')}}" >

                                                @endif
@csrf
                                                <input type="hidden" name="status" value="52">

                                                <div class="elementor-form-fields-wrapper elementor-labels-above d-md-flex" >



                                                    <div
                                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                        <button type="submit"
                                                            class="elementor-button elementor-size-md">
                                                            جستجو
                                                        </button>
                                                    </div>


<input type="hidden" name="suffix"  value="com" />

@include('index.layouts.search_domain', [  'name' => $name   ])





                                                        <div
                                                            class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-{{ $name=='all' ? '70' : '50' }} elementor-field-required">
                                                        <input  type="text" name="domain"
                                                            id="form-field-tel"
                                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                                            placeholder="domain" required="required"
                                                            aria-required="true"
                                                            dir="ltr"   style="background: none repeat scroll 0 0 #d3d3d3;
                                                            border: 1px solid #9f9f9f;
                                                            border-radius: 0 10px 10px 0;
                                                            box-shadow: 0 0 5px #929292 inset;
                                                            cursor: pointer;
                                                            font-size: 17px;
                                                            font-weight: bold;
                                                            line-height: 43px;
                                                            padding: 0 10px;
                                                            position: relative;
                                                            width: 90px;">

                                                    </div>

                                                    <div
                                                    class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-20 elementor-field-required">
                                                    <span class="domain-in-01"  style="display: inline-block;
                                                    font-size: 17px;
                                                    font-weight: bold;
                                                    padding: 8px 10px 9px;
                                                    text-align: center;
                                                    width: 68px;
                                                    border: 1px solid #9f9f9f;
                                                    float: left;
                                                    margin-top: 1px;
                                                    border-radius: 6px 0 0 6px;
                                                    direction: ltr;
                                                    background: none repeat scroll 0 0 #d3d3d3;">www.</span>

                                                </div>


                                                </div>

                                            </form>


 --}}




{{-- --------------------------------- --}}

                                        </div>
                                        </div>








                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </section>













        </div>
    </div>
</div>







<div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">


<section class="elementor-section elementor-top-section elementor-element elementor-element-df656de elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="df656de" data-element_type="section" data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">


    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-45c4135" data-id="45c4135" data-element_type="column">
    <div class="elementor-column-wrap">
    <div class="elementor-widget-wrap">
    </div>
    </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62e671f" data-id="62e671f" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-401cbbe elementor-widget elementor-widget-rt-pricing-table" data-id="401cbbe" data-element_type="widget" data-widget_type="rt-pricing-table.default">
    <div class="elementor-widget-container">
    <div id="" class="pricing_table compare " data-rt-animation-group="group">







             </div>
             </div>
             </div>
             </div>
             </div>
             </section>


            </div>
        </div>
    </div>




{{--


<div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">


            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-b01aaa0 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                data-id="b01aaa0" data-element_type="section"
                data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">






      @foreach ($contentdomains->chunk(6) as $chunk)
      <div class="elementor-container elementor-column-gap-default">

      <div class="elementor-row">

          @foreach ($chunk as  $key => $contentdomain)


                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-55e0228"
                            data-id="55e0228" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">

                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-fd74f54 elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="fd74f54" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <img   src="{{ asset($contentdomain->image . '') }}" style="height: 60px"  />                                               </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="elementor-element elementor-element-8ca1bc4 elementor-widget elementor-widget-rt-heading"
                                        data-id="8ca1bc4" data-element_type="widget"
                                        data-widget_type="rt-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="rt-heading-wrapper text-center">
                                                <a
              @if (auth()->guard('user')->user())
               href="{{route('user.domain.check',$contentdomain->name )}}"
              @else
               href="{{route('index.check',$contentdomain->name )}}"
              @endif
                                                    target="_self">
                                                    <h2 class="   rt-heading" style="direction:ltr;"><span style="color: red; font_size: 24px; ">.</span>{{$contentdomain->name}} </h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="elementor-element elementor-element-eb0c080 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="eb0c080" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a

              @if (auth()->guard('user')->user())
              href="{{route('user.domain.check',$contentdomain->name )}}"
             @else
             href="{{route('index.check',$contentdomain->name )}}"
             @endif
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">جستجو</span>
                                                    </span>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endforeach

                    </div>


                </div>
                    @endforeach


            </section>


        </div>
    </div>
</div>

 --}}





<style>
    .padding {
/* padding: 10rem !important */
}

body {
background-color: #f8fafe
}

.domain-form .form-group {

/* border: 1px solid #9ff0c8; */
/* padding: 20px */
}

.domain-form .form-group input {
height: 70px !important;
/* border: transparent */
}
.domain-form .form-group button {
    border: 1px solid #9f9f9f;
                                                            border-radius: 0 10px 10px 0;
                                                            box-shadow: 0 0 5px #929292 inset;
height: 70px !important;
/* border: transparent */
}

.form-control {
height: 52px !important;
background: #fff !important;
color: #3a4348 !important;
font-size: 18px;
border-radius: 0px;
-webkit-box-shadow: none !important;
box-shadow: none !important
}

.px-4 {
/* padding-left: 1.5rem !important */
}

.domain-form .form-group .search-domain {
background: #rgb(57, 211, 238);
border: 2px solid #rgb(57, 211, 238);
color: #fff;
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
border-radius: 0
}

.domain-price span {
color: #3a4348;
margin: 0 10px;

}

.domain-price span small {
color: #24bdc9;
font-size: 12px;
/* margin: 0 3px; */

}
</style>










    @slot('script')

    @endslot


@endcomponent
