@component('index.brand.layouts.content', [
    'title' => 'پیگیری درخواست برند',
    'tabTitle' => 'پیگیری درخواست برند',
    'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => ' پیگیری درخواست برند'], ['title' =>
    'پیگیری درخواست برند', 'class' => 'active']],
    'show_bread' => 'active',
    ])
    @slot('style')
 
    <link rel="stylesheet" href="{{asset('sabt_files/formsmain.min.css')}}">

    @endslot


    <section class="blog-content">
        <div class="container">
            <div class="row reset-order">
                <div class="col-xl-3 col-lg-4">

                    @include('index.brand.layouts.sidebar')




                </div>
                <div class="col-xl-9 col-lg-8">
                    <div id="find-h" class="blog-content-box">






                        <?php echo $txtdese->text; ?>





                        <div class='gf_browser_gecko gform_wrapper' id='gform_wrapper_1'>
                            <form method='post' enctype='multipart/form-data'  action=''>
                                <div class='gform_heading'>
                                    <span class='gform_description'></span>
                                </div>
                                <div class='gform_body'>
                                    <ul id='gform_fields_1'
                                        class='gform_fields top_label form_sublabel_below description_below'>
                                        <li id='field_1_1'
                                            class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                            <label class='gfield_label' for='input_1_1'>نام و نام خانوادگی<span
                                                    class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_text'><input name='input_1'
                                                    id='input_1_1' type='text' value='' class='medium' aria-required="true"
                                                    aria-invalid="false" /></div>
                                        </li>
                                        <li id='field_1_6'
                                            class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                            <label class='gfield_label' for='input_1_6'>تلفن همراه<span
                                                    class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_phone'><input name='input_6'
                                                    id='input_1_6' type='text' value='' class='medium' aria-required="true"
                                                    aria-invalid="false" /></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class='gform_footer top_label'>
                                    <input type='submit' id='gform_submit_button_1' class='gform_button button'
                                        value='درخواست استعلام' />


                                </div>
                            </form>
                        </div>











                        @if (!$tracking)
                            <h1 class="searchPageTitle">Search for evidence</h1>
                            <form method="POST" action="{{ route('index.tracking.result') }}" class="searchForm">
                                @csrf
                                <div class="form-group">
                                    <label for="searchInput">Search</label>
                                    <input aria-label="search" class="form-control" id="searchInput"
                                        placeholder="type tracking code" name="codetracking" type="search" value=""
                                        required />
                                    <span class="input-group-addon">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                @method('PUT')
                                <button class="btn btnYellow" type="submit">Search
                                </button>
                            </form>
                        @endif


                        @if ($tracking)
                            {{-- @include('index.layouts.image_tracking', [  'title' => 'Contact Us' , 'image_page' => $tracking->image ]) --}}
                        @endif




                    </div>
                </div>





            </div>
        </div>
        </div>
    </section>

    @slot('script')
    @endslot
@endcomponent
