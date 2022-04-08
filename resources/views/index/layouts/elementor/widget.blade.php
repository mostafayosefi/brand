
@foreach($textdeses as $key => $textdese)
@if($textdese->id==$id)



<div class="elementor-element elementor-element-70ca113 elementor-widget elementor-widget-rt-heading"
data-id="70ca113" data-element_type="widget"
data-widget_type="rt-heading.default">
<div class="elementor-widget-container">
    <div class="rt-heading-wrapper text-center">


        <div class="card-header card-header-border-bottom"
            style="box-sizing: border-box; text-shadow: none; box-shadow: none; padding: 0.875rem 1.5rem; margin-bottom: 0px; background-color: #ffffff; border-bottom: 1px solid #f2f4f9; border-radius: 0px; font-family: iransans, Overpass, sans-serif; font-size: 14px;">
         <h3> @php echo $textdese->text; @endphp </h3>
         </div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-bbab38b elementor-widget elementor-widget-spacer"
data-id="bbab38b" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
    <div class="elementor-spacer">
        <div class="elementor-spacer-inner"></div>
    </div>
</div>
</div>




<div class="elementor-element elementor-element-db82b8e elementor-widget elementor-widget-spacer"
data-id="db82b8e" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
    <div class="elementor-spacer">
        <div class="elementor-spacer-inner"></div>
    </div>
</div>
</div>



<div class="elementor-element elementor-element-c438a9c elementor-widget elementor-widget-rt-heading"
data-id="c438a9c" data-element_type="widget"
data-widget_type="rt-heading.default">
<div class="elementor-widget-container">
    <div class="rt-heading-wrapper style-3 text-center">
        <H2 class="   rt-heading style-3">{{$textdese->title}}</H2>
    </div>
</div>
</div>


            @endif
            @endforeach
