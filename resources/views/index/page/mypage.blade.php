@component('index.layouts.content', [
    'title' => $mypage->title ,
    'tabTitle' => $mypage->title ,
    'breadcrumb' => [['title' => $mypage->title , 'class' => 'active']],
    ])






    <div data-elementor-type="wp-page" data-elementor-id="2792" class="elementor elementor-2792"
        data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">

{{-- تست --}}
{{-- تست دوم  --}}
{{-- test3 --}}
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-bb6f082 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="bb6f082" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
                    @if ($mypage->image != '')   style="background-image:url({{ asset($mypage->image) }})   ; background-position:center center;background-size:cover;" @endif
                    >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e476bf9"
                                data-id="e476bf9" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-67faba9 elementor-widget elementor-widget-heading"
                                            data-id="67faba9" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    {{ $mypage->title }} </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0a2c070 elementor-widget elementor-widget-text-editor"
                                            data-id="0a2c070" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-f95f226 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="f95f226" data-element_type="section"
                    data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c404849"
                                data-id="c404849" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-e4ea146 elementor-widget elementor-widget-image"
                                            data-id="e4ea146" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8557297 elementor-widget elementor-widget-text-editor"
                                            data-id="8557297" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">




                                                    <?php echo $mypage->text; ?>



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











@endcomponent
