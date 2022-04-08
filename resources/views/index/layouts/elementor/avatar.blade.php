@if ($avatarimage)

<img  src="{{ asset($avatarimage . '') }}"     style="
border-radius: 50%;
height: 100px;
width: 100px;">
@else


<div class="elementor-element elementor-element-f464a19 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
data-id="f464a19" data-element_type="widget"
data-widget_type="icon.default">
<div class="elementor-widget-container">
    <div class="elementor-icon-wrapper">
        <div class="elementor-icon">
            <i aria-hidden="true" class="fas fa-user-alt"></i>
        </div>
    </div>
</div>
</div>

@endif
