@foreach ($textdeses as $key => $textdese)
    @if ($textdese->id == $id)

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-585e8a2 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle default-style"
            data-id="585e8a2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
            @if ($textdese->image)   style="background-image:url({{ asset($textdese->image) }})  ; background-position:center center;background-size:cover;" @endif>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39c48d1"
                        data-id="39c48d1" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-b7eaa5a elementor-widget elementor-widget-rt-heading"
                                    data-id="b7eaa5a" data-element_type="widget" data-widget_type="rt-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rt-heading-wrapper text-center">
                                            <H1 class="   rt-heading custom-color"> {{$textdese->title}}
                                                  </H1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endif
@endforeach
