@component('index.layouts.content', [
    'title' => 'سوالات متداول',
    'tabTitle' => 'سوالات متداول',
    'breadcrumb' => [['title' => 'سوالات متداول', 'class' => 'active']],
    ])



<div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            @include('index.layouts.elementor.warp', [ 'id' => '5' ])

            <section class="elementor-section elementor-top-section elementor-element elementor-element-24a7b76 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="24a7b76" data-element_type="section" data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-832409a" data-id="832409a" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-42f2890 elementor-widget elementor-widget-heading" data-id="42f2890" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">

@php
echo $txtdese->text;
@endphp

        </div>
        </div>
        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1456556 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="1456556" data-element_type="section" data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                <div class="elementor-container elementor-column-gap-default">


@if($faqs)


<div class="elementor-row">

<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-field-required">

</div>
<div class="elementor-column elementor-col-60 elementor-inner-column elementor-element elementor-element-1cef6d1" data-id="1cef6d1" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-bc8142e elementor-widget elementor-widget-rt-accordions" data-id="bc8142e" data-element_type="widget" data-widget_type="rt-accordions.default">
        <div class="elementor-widget-container">
    <div class="rt-toggle  numbered">

    <ol>

@foreach($faqs as $key => $admin)
    <li class="">
    <div class="toggle-head">
    <div class="toggle-number">{{ $key + 1 }}</div>
    <div class="toggle-title">{{$admin->question}}</div>
    </div>
    <div class="toggle-content" style="display: none;">
    <p>{{$admin->answer}}</p>
    </div>
    </li>
    @endforeach





    </ol></div>		</div>
        </div>
                </div>
            </div>
</div>


<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-field-required">

</div>
</div>
@endif
            </div>
</section>
                </div>
            </div>
</div>
                        </div>
            </div>
</section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-b70d919 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="b70d919" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29ad85a" data-id="29ad85a" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-84f80e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="84f80e1" data-element_type="section" data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c537a29" data-id="c537a29" data-element_type="column">
    <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        </div>
            </div>
</div>
        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4454f7b" data-id="4454f7b" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-6c5ec56 elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon" data-id="6c5ec56" data-element_type="widget" data-widget_type="icon.default">
        <div class="elementor-widget-container">
            <div class="elementor-icon-wrapper">
    <div class="elementor-icon">
    <i aria-hidden="true" class="fas fa-question"></i>			</div>
</div>
        </div>
        </div>
                </div>
            </div>
</div>
        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-06d0342" data-id="06d0342" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-25c60a9 elementor-widget elementor-widget-heading" data-id="25c60a9" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">سوال شما بی پاسخ ماند؟</h2>		</div>
        </div>
        <div class="elementor-element elementor-element-3940174 elementor-widget elementor-widget-rt-heading" data-id="3940174" data-element_type="widget" data-widget_type="rt-heading.default">
        <div class="elementor-widget-container">
    <div class="rt-heading-wrapper text-center">
                <p class="   rt-heading">پاسخگوی سوالات شما هستیم</p>
            </div>		</div>
        </div>
        <div class="elementor-element elementor-element-4546362 elementor-align-center elementor-widget elementor-widget-rt-button" data-id="4546362" data-element_type="widget" data-widget_type="rt-button.default">
        <div class="elementor-widget-container">
    <div class="button_wrapper  rounded"><a href="{{route('index.support')}}" target="_self" title="تماس با {{$setting->title}}" class="button_  style-1 small"><span><span>تماس با ما</span></span><span><span>تماس با ما</span></span></a></div>		</div>
        </div>
                </div>
            </div>
</div>
        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-af206ad" data-id="af206ad" data-element_type="column">
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
            </div>
</section>




        </div>
    </div>
</div>





@endcomponent
