
@if ($name != 'all')


<div
class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_5e19ae6 elementor-col-20 elementor-field-required">
<div class="elementor-field elementor-select-wrapper ">
    <select name="suffix"
        id="form-field-field_5e19ae6"
        class="elementor-field-textual elementor-size-sm"
        required="required" aria-required="true" dir="ltr"
        style="background: none repeat scroll 0 0 #d3d3d3;
        border: 1px solid #9f9f9f;
        border-radius: 0 10px 10px 0;
        box-shadow: 0 0 5px #929292 inset;
        cursor: pointer;
        font-size: 17px;
        font-weight: bold;
        line-height: 43px;
        padding: 0 10px;
        position: relative;
        width: 90px;">


@foreach ($contentdomains as $contentdomain)
<option value="{{$contentdomain->link}}"  {{$contentdomain->name == $name ? 'selected' : ''}} >.{{$contentdomain->link}}</option>
@endforeach

    </select>
</div>
</div>

@endif
