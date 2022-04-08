
@php
$show_warp = Arr::flatten($warp); 
$name_warp = Arr::get($warp, 'name_warp');
$src_warp = Arr::get($warp, 'src_warp');
$route_warp = Arr::get($warp, 'route_warp');
    // dd($route_warp);
@endphp

<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c5ec86c"
data-id="c5ec86c" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
    <a href="{{$route_warp}}">
        <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-f464a19 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                data-id="f464a19" data-element_type="widget"
                data-widget_type="icon.default">
                <div class="elementor-widget-container">
                    <div class="elementor-icon-wrapper">
                        <div class="elementor-icon   {{ isShow(($show_warp)) }}">
                            <img    src="{{ asset('upload/images/icon/'.$src_warp.'')}}"  />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3dad55e elementor-widget elementor-widget-heading"
                data-id="3dad55e" data-element_type="widget"
                data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">{{$name_warp}}
                    </h2>
                </div>
            </div>
        </div>
    </a>
</div>
</div>
