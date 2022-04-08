@component('index.layouts.content', [
    'title' => ' صفحه اصلی',
    'tabTitle' => ' صفحه اصلی ',
    'breadcrumb' => [['title' => 'صفحه اصلی', 'class' => 'active']],
    ])




    <div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                @include('index.layouts.elementor.warp', [ 'id' => '2' ])
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a45e332 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="a45e332" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;mountains&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" opacity="0.33"
                                d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
                            <path class="elementor-shape-fill" opacity="0.66"
                                d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
                            <path class="elementor-shape-fill"
                                d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">


                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-71c294d"
                                data-id="71c294d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">


                                        <div class="elementor-element elementor-element-70ca113 elementor-widget elementor-widget-rt-heading"
                                            data-id="70ca113" data-element_type="widget"
                                            data-widget_type="rt-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="rt-heading-wrapper text-center">


      @include('index.layouts.elementor.widget', [ 'id' => '2' ])


                                        <div class="elementor-element elementor-element-412944a elementor-widget elementor-widget-rt-pricing-table"
                                            data-id="412944a" data-element_type="widget"
                                            data-widget_type="rt-pricing-table.default">


                                            <div class="elementor-widget-container">
                                                @include('index.layouts.form_errors')
                                                <form class="elementor-form" method="post"
                                                    action="{{ route('index.user.login.post') }}">
                                                    @csrf




                                                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                                                        style="padding-bottom: 30px;">
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                            <label>ایمیل</label></div>
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-30">
                                                            <input size="1" type="email" name="email" id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="لطفا ایمیل خود را وارد نمایید"
                                                                required="required" value="{{ old('email') }}"
                                                                aria-required="true">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-60 elementor-field-required">
                                                        </div>
                                                    </div>


                                                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                                                        style="padding-bottom: 30px;">
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                            <label>رمزعبور</label></div>
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-30">
                                                            <input size="1" type="password" name="password"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="لطفا رمزعبور خود را وارد نمایید"
                                                                required="required" aria-required="true">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-60 elementor-field-required">
                                                        </div>
                                                    </div>

                                                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                                                        style="padding-bottom: 30px;">
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                            <label></label></div>
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-30">

                                                            {!! NoCaptcha::renderJs() !!}
                                                            {!! NoCaptcha::display() !!}
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-60 elementor-field-required">
                                                        </div>
                                                    </div>



                                                    <div class="elementor-form-fields-wrapper elementor-labels-above"
                                                        style="padding-bottom: 30px;">
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                            <label></label></div>
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-30">

                                                            <button type="submit"
                                                                class="elementor-button elementor-size-sm">
                                                                ورود
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-60 elementor-field-required">
                                                        </div>
                                                    </div>

                                                </form>
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


    @slot('script')

    @endslot
@endcomponent
