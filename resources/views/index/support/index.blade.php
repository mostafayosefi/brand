@component('index.layouts.content', [
    'title' => 'تماس با ما',
    'tabTitle' => 'تماس با ما',
    'breadcrumb' => [['title' => 'تماس با ما', 'class' => 'active']],
    ])

@slot('style')


<link data-minify="1" rel='stylesheet' id='elementor-post-32-css'  href="{{ asset('telnum_files/post-32.css?ver=1631770344') }}"  type='text/css' media='all' />

@endslot


    <div data-elementor-type="wp-post" data-elementor-id="32" class="elementor elementor-32" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-68d805c elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="68d805c" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
                    @if ($txtdese->image != '')   style="background-image:url({{ asset($txtdese->image) }})  ; background-position:center center;background-size:cover;" @endif>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5951b68"
                                data-id="5951b68" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-021bf96 elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon"
                                            data-id="021bf96" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ec6dea4 elementor-widget elementor-widget-rt-heading"
                                            data-id="ec6dea4" data-element_type="widget"
                                            data-widget_type="rt-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="rt-heading-wrapper text-center">
                                                    <p class="   rt-heading">{{ $setting->address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8ef99ad"
                                data-id="8ef99ad" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a2844ed elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon"
                                            data-id="a2844ed" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9becdd6 elementor-widget elementor-widget-rt-heading"
                                            data-id="9becdd6" data-element_type="widget"
                                            data-widget_type="rt-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="rt-heading-wrapper text-center">
                                                    <a href="tel:{{ $setting->tell }}" target="_self">
                                                        <p class="   rt-heading">{{ $setting->tell }}


                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a3816a2"
                                data-id="a3816a2" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-61884f3 elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon"
                                            data-id="61884f3" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8c598e9 elementor-widget elementor-widget-rt-heading"
                                            data-id="8c598e9" data-element_type="widget"
                                            data-widget_type="rt-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="rt-heading-wrapper text-center">
                                                    <a href="mailto:{{ $setting->email }}" target="_self">
                                                        <p class="   rt-heading">{{ $setting->email }}
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-1ae4fbf elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="1ae4fbf" data-element_type="section"
                    data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be84cf8"
                                data-id="be84cf8" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-70ba4b2 elementor-widget elementor-widget-heading"
                                            data-id="70ba4b2" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <?php echo $txtdese->text; ?> </div>
                                        </div>
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-ea081a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                                            data-id="ea081a9" data-element_type="section"
                                            data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3aa66ed"
                                                        data-id="3aa66ed" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-ed182c8 elementor-widget elementor-widget-rt-heading"
                                                                    data-id="ed182c8" data-element_type="widget"
                                                                    data-widget_type="rt-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="rt-heading-wrapper">
                                                                            <H2 class="   rt-heading">فرم تماس با ما </H2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-1e73f0f elementor-button-align-stretch elementor-widget elementor-widget-form"
                                                                    data-id="1e73f0f" data-element_type="widget"
                                                                    data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                                                    data-widget_type="form.default">
                                                                    <div class="elementor-widget-container">


                                                                        @include('index.layouts.form_errors')


                                                                        <form class="elementor-form"
                                                                            action="{{ route('index.support.post') }}"
                                                                            method="post">


                                                                            @csrf


                                                                            <input type="hidden" name="from"
                                                                                value="contact">


                                                                            <div
                                                                                class="elementor-form-fields-wrapper elementor-labels-above">

                                                                                <div
                                                                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                                                                    <input size="1" type="text"
                                                                                        name="name"
                                                                                        id="form-field-name"
                                                                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                                        placeholder="نام و نام خانوادگی"
                                                                                        required="required"
                                                                                        aria-required="true">
                                                                                </div>

                                                                                <div
                                                                                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">
                                                                                    <input size="1" type="email"
                                                                                        name="email" id="form-field-email"
                                                                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                                        placeholder="ایمیل">
                                                                                </div>

                                                                                <div
                                                                                    class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-100 elementor-field-required">
                                                                                    <input size="1" type="tel" name="tell"
                                                                                        id="form-field-tel"
                                                                                        class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                                        placeholder="شماره تماس"
                                                                                        required="required"
                                                                                        aria-required="true"
                                                                                        pattern="[0-9()#&amp;+*-=.]+"
                                                                                        title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                                                                                </div>


                                                                                <div
                                                                                    class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                                                                    <textarea
                                                                                        class="elementor-field-textual elementor-field  elementor-size-sm"
                                                                                        name="text" id="form-field-message"
                                                                                        rows="4" placeholder="پیام شما"
                                                                                        required="required"
                                                                                        aria-required="true"></textarea>
                                                                                </div>








                                                                                <div
                                                                                    class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">

                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                                                                </div>















                                                                                <div
                                                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                                                    <button type="submit"
                                                                                        class="elementor-button elementor-size-sm">
                                                                                        <span>
                                                                                            <span
                                                                                                class=" elementor-button-icon"></span>
                                                                                            <span
                                                                                                class="elementor-button-text">ثبت
                                                                                                درخواست </span>
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
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b2593ac"
                                                        data-id="b2593ac" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-b2d539d elementor-widget elementor-widget-rt-heading"
                                                                    data-id="b2d539d" data-element_type="widget"
                                                                    data-widget_type="rt-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="rt-heading-wrapper">
                                                                            <H2 class="   rt-heading"> &nbsp;</H2>
                                                                        </div>
                                                                    </div>
                                                                </div>






                                                                <div class="elementor-element elementor-element-ab01b86 elementor-widget elementor-widget-text-editor"
                                                                    data-id="ab01b86" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="elementor-text-editor elementor-clearfix">
                                                                            <p style="text-align: center;">جهت کسب اطلاعات
                                                                                بیشتر و درخواست خرید، فرم مربوطه را تکمیل
                                                                                نمایید.<br>همکاران ما در اسرع وقت با شما
                                                                                تماس خواهند گرفت.</p>
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
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>









@endcomponent
