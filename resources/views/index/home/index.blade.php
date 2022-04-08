@component('index.layouts.content', [
    'title' =>  $mysetting->title ,
    'tabTitle' => $mysetting->title,
    'breadcrumb' => [['title' => $mysetting->title , 'class' => 'active']],
    ])




    <div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">




                @foreach ($spotlites as $key =>  $spotlite)
                @if ($spotlite->id == '1')
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-9b6d849 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle default-style"
                        data-id="9b6d849" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
                        style="background-image:url({{ asset($spotlite->image) }})  ; background-position:center center;background-size:cover;">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7ac1f8"
                                    data-id="a7ac1f8" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">


                                        <div class="elementor-widget-wrap">



                                            @php echo $spotlite->text; @endphp

        <br>

                                            @if(auth()->guard('user')->user())
                                            <div class="elementor-element elementor-element-8e63824 elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="8e63824" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href=""
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">خرید </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        @else

                                            <div class="elementor-element elementor-element-8e63824 elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="8e63824" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('index.user.register')}}"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">ثبت نام </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e0c764c elementor-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="e0c764c" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('index.user.login')}}"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text"> ورود</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach







                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2d9e1a9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="2d9e1a9" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">







                            @foreach ($spotlites as $key =>  $spotlite)
                                @if ($spotlite->id == '2')
                                    @php echo $spotlite->text; @endphp
                                @endif
                            @endforeach













                        </div>
                    </div>
                </section>



                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-31bcef7 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="31bcef7" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d650453"
                                data-id="d650453" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-88a32d8 elementor-widget elementor-widget-heading"
                                            data-id="88a32d8" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-medium">خدمات و سرویس های
                                                    ما </h2>
                                            </div>
                                        </div>



            @foreach ($comidsfirst->chunk(3) as $chunk)
            <section
            class="elementor-section elementor-inner-section elementor-element elementor-element-b01aaa0 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
            data-id="b01aaa0" data-element_type="section"
            data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">


                    @foreach ($chunk as  $key => $comid)

                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55e0228"
                    data-id="55e0228" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-fd74f54 elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="fd74f54" data-element_type="widget"
                                data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img" style="height: 128px;"  ><img width="128"
                                                    height="128"
                                                     src="{{ asset($comid->image) }}"
                                                    class="elementor-animation-float attachment-full size-full lazyloaded"
                                                    alt="{{ $comid->title }}"
                                                    data-ll-status="loaded"><noscript><img width="128"
                                                        height="128"
                                                        src="{{ asset($comid->image) }}"                                                                    class="elementor-animation-float attachment-full size-full"
                                                        alt="{{ $comid->title }}" /></noscript></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8ca1bc4 elementor-widget elementor-widget-rt-heading"
                                data-id="8ca1bc4" data-element_type="widget"
                                data-widget_type="rt-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="rt-heading-wrapper text-center">
                                        <a href="#" target="_self">
                                            <h2 class="   rt-heading">{{ $comid->title }}
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a4e999a elementor-widget elementor-widget-text-editor"
                                data-id="a4e999a" data-element_type="widget"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>{{ $comid->text }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-eb0c080 elementor-align-center elementor-widget elementor-widget-button"
                                data-id="eb0c080" data-element_type="widget"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href=""
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span
                                                    class="elementor-button-text">{{ $comid->btn }}</span>
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
            </section>
                @endforeach




    </div>
    </div>
    </div>
    </div>
    </div>
    </section>




    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c1cf406 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
        data-id="c1cf406" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f4c4b1"
                    data-id="6f4c4b1" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">










            @foreach ($comidssec->chunk(5) as $chunk)
            <section
            class="elementor-section elementor-inner-section elementor-element elementor-element-b01aaa0 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
            data-id="b01aaa0" data-element_type="section"
            data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">


                    @foreach ($chunk as  $key => $comid)


                                <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-f94af8a"
                                    data-id="f94af8a" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-df3cec3 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                data-id="df3cec3" data-element_type="widget"
                                                data-widget_type="image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-box-wrapper">
                                                        <figure class="elementor-image-box-img"><img width="128"
                                                                height="128"
                                                                 src="{{ asset($comid->image) }}"
                                                                class="elementor-animation-float attachment-full size-full lazyloaded"
                                                                alt="{{ $comid->title }}"
                                                                data-ll-status="loaded"><noscript><img width="128"
                                                                    height="128"
                                                                    src="{{ asset($comid->image) }}"                                                                    class="elementor-animation-float attachment-full size-full"
                                                                    alt="{{ $comid->title }}" /></noscript></figure>
                                                        <div class="elementor-image-box-content">
                                                            <h3 class="elementor-image-box-title">{{ $comid->title }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                    </div>
    </section>
    @endforeach



    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    @foreach ($spotlites as $key =>  $spotlite)
        @if ($spotlite->id == '3')
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-9b6d849 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle default-style"
                data-id="9b6d849" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
                style="background-image:url({{ asset($spotlite->image) }})  ; background-position:center center;background-size:cover;">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7ac1f8"
                            data-id="a7ac1f8" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">


                                <div class="elementor-widget-wrap">



                                    @php echo $spotlite->text; @endphp


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach



    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-f8222a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
        data-id="f8222a4" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-93177b1"
                    data-id="93177b1" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-5af7228 elementor-widget elementor-widget-heading"
                                data-id="5af7228" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-medium">مشتریان ما چه می‌گویند؟</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-71d179e elementor-widget elementor-widget-rt-testimonial-carousel"
                                data-id="71d179e" data-element_type="widget"
                                data-widget_type="rt-testimonial-carousel.default">
                                <div class="elementor-widget-container">

                                    <div id="testimonial-dynamicID-520966"
                                        class="rt-carousel carousel-holder testimonial-carousel testimonials center boxed-carousel rt_lightbox_gallery"
                                        data-item-width="3" data-nav="true" data-dots="" data-margin="15" data-autoplay=""
                                        data-timeout="" data-thumbnails="false" data-boxed="true" data-min-height=""
                                        data-padding="0" data-loop="true" data-tablet-item-width=""
                                        data-mobile-item-width="">
                                        <div class="owl-carousel">


                                            @foreach ($coment as $comid)
                                                <div class="boxed">
                                                    <div class="testimonial item">
                                                        <div class="text">
                                                            <span class="quote">&#8220;</span>
                                                            <p> {{ $comid->text}} </p>
                                                        </div>
                                                        <div class="client-info">
                                                            <h6>{{ $comid->title }} </h6>
                                                            <span>{{ $comid->role }} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach





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




    @foreach ($spotlites as $key =>  $spotlite)
        @if ($spotlite->id == '4')
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-de356aa elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle default-style"
                data-id="de356aa" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
                style="background-image:url({{ asset($spotlite->image) }})  ; background-position:center center;background-size:cover;">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-799063e"
                            data-id="799063e" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-ab5a9ad"
                            data-id="ab5a9ad" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">



                                    @php echo $spotlite->text; @endphp




                                    @if(auth()->guard('user')->user())
                                        <div class="elementor-element elementor-element-355241a elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="355241a" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href=""
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">خرید</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @else

                                        <div class="elementor-element elementor-element-355241a elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="355241a" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="{{route('index.user.register')}}"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">عضویت</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif





                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-fe1fd4b"
                            data-id="fe1fd4b" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        @endif
    @endforeach




    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-222e89b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
        data-id="222e89b" data-element_type="section" id="123"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0262d47"
                    data-id="0262d47" data-element_type="column">
                    <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8fe7bb5"
                    data-id="8fe7bb5" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-17a0193 elementor-widget elementor-widget-rt-heading"
                                data-id="17a0193" data-element_type="widget" data-widget_type="rt-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="rt-heading-wrapper text-center">
                                        <h4 class="   rt-heading">درخواست مشاوره و خرید</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ab01b86 elementor-widget elementor-widget-text-editor"
                                data-id="ab01b86" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p style="text-align: center;">جهت کسب اطلاعات بیشتر و درخواست خرید، فرم روبرو را
                                            تکمیل نمایید.<br>همکاران ما در اسرع وقت با شما تماس خواهند گرفت.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-dd64e4c"
                    data-id="dd64e4c" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-17db1ec elementor-button-align-stretch elementor-widget elementor-widget-form"
                                data-id="17db1ec" data-element_type="widget"
                                data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                data-widget_type="form.default">
                                <div class="elementor-widget-container">

                                    @include('index.layouts.form_errors')


                                    <form class="elementor-form"
                                     action="{{ route('index.support.post') }}"
                                    method="post">


 @csrf                                        <input type="hidden" name="from" value="index">


                                        <div class="elementor-form-fields-wrapper elementor-labels-above">

                                            <div
                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                                <input size="1" type="text" name="name" id="form-field-name"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="نام و نام خانوادگی" required="required"
                                                    aria-required="true">
                                            </div>

                                            <div
                                                class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">
                                                <input size="1" type="email" name="email" id="form-field-email"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="ایمیل">
                                            </div>

                                            <div
                                                class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-100 elementor-field-required">
                                                <input size="1" type="tel" name="tell" id="form-field-tel"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="شماره تماس" required="required" aria-required="true"
                                                    pattern="[0-9()#&amp;+*-=.]+"
                                                    title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                                            </div>


                                            <div
                                                class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                                <textarea
                                                    class="elementor-field-textual elementor-field  elementor-size-sm"
                                                    name="text" id="form-field-message" rows="4" placeholder="پیام شما"
                                                    required="required" aria-required="true"></textarea>
                                            </div>






                                            <div
                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-field-required">

                                                <label>  </label>
                                            </div>


                                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required"
                                                style="padding-bottom: 20px;">


                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>







                                            <div
                                                class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                <button type="submit" class="elementor-button elementor-size-sm">
                                                    <span>
                                                        <span class=" elementor-button-icon"></span>
                                                        <span class="elementor-button-text">ثبت درخواست</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-966b88b"
                    data-id="966b88b" data-element_type="column">
                    <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    </div>
    </div>
    </div>








    </div>




@endcomponent
