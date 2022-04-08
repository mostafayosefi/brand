@component('index.layouts.content', [
    'title' => 'وب سرویس',
    'tabTitle' => 'وب سرویس',
    'breadcrumb' => [['title' => 'وب سرویس', 'class' => 'active']],
    ])

@slot('style')


<link data-minify="1" rel='stylesheet' id='elementor-post-32-css'  href="{{ asset('telnum_files/post-32.css?ver=1631770344') }}"  type='text/css' media='all' />
@endslot






<div data-elementor-type="wp-post" data-elementor-id="32" class="elementor elementor-32"
data-elementor-settings="[]">
<div class="elementor-inner">
    <div class="elementor-section-wrap">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-68d805c elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
            data-id="68d805c" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}"
            @if ($txtdese->image != '')   style="background-image:url({{ asset($txtdese->image) }})  ; background-position:center center;background-size:cover;" @endif>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">


                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8ef99ad"
                        data-id="8ef99ad" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-a2844ed elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon"
                                    data-id="a2844ed" data-element_type="widget"
                                    data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="fas fa-window-restore"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9becdd6 elementor-widget elementor-widget-rt-heading"
                                    data-id="9becdd6" data-element_type="widget"
                                    data-widget_type="rt-heading.default">

                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
 
 @include('index.layouts.document.listcategori', [  'myurl' => $myurl , $categoryapis ])




                                        </ul>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5951b68"
                        data-id="5951b68" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">


 @include('index.layouts.document.text', [ 'myurl' => $myurl , $categoryapis , $textwebservices , $txtdese])



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
