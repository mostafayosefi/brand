@component('index.brand.layouts.content', [
    'title' => 'پیگیری درخواست ثبت شرکت',
    'tabTitle' => 'پیگیری درخواست ثبت شرکت',
    'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => ' پیگیری درخواست ثبت شرکت'], ['title' =>
    'پیگیری درخواست ثبت شرکت', 'class' => 'active']],
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




                        @if (!$tracking)


                        <div class='gf_browser_gecko gform_wrapper' id='gform_wrapper_1'>
                            <form method="POST" action="{{ route('index.tracking.result') }}" >
                                @csrf
                                <div class='gform_heading'>
                                    <span class='gform_description'></span>
                                </div>
                                <div class='gform_body'>
                                    <ul id='gform_fields_1'
                                        class='gform_fields top_label form_sublabel_below description_below'>
                                        <li id='field_1_1'
                                            class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                            <label class='gfield_label' for='random'>  شماره پیگیری    <span
                                                    class='gfield_required'>*</span></label>
                                            <div class='ginput_container ginput_container_text'><input name='random'
                                                    id='random' type='text' value='' class='medium' aria-required="true"
                                                    aria-invalid="false" /></div>
                                        </li>
                                    </ul>
                                </div>


                                <input type="hidden" name="mymodel" value="requestcompany" />


                                @method('PUT')
                                <div class='gform_footer top_label'>

                                        <button type='submit' id='gform_submit_button_1' class='gform_button button'>
                                              درخواست استعلام
                                              <i class="fa fa-search"></i>
                                        </button>



                                </div>
                            </form>
                        </div>


                        @endif


                        @if ($tracking)
 @include('index.brand.tracking.result', [  'name' => 'requestcompany' ,  $tracking ])
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
