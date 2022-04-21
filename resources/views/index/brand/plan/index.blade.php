@component('index.brand.layouts.content', [
    'title' => 'پلانهای شرکت',
    'tabTitle' => 'پلانهای شرکت',
    'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => 'پلانهای شرکت', 'class' => 'active']],
    'show_bread' => 'active',
    ])
    @slot('style')
    @endslot


    <section class="blog-content">
        <div class="container">
            <div class="row reset-order">
                <div class="col-xl-3 col-lg-4">

                    @include('index.brand.layouts.sidebar')




                </div>
                <div class="col-xl-9 col-lg-8">
                    <div id="find-h" class="blog-content-box">



                        <h2>لیست پلانها</h2>
                        <hr>





                        @foreach ($myplan->chunk(3) as $plane)
                        <div class="blog-related-post">
                            <div class="row">


                                @foreach ($plane as  $key => $plan)
                                <div class="col-lg-4">
                                    <div class="related-post">
                                        <img src="{{asset($plan->image)}}"
                                            alt="{{$plan->name}}"> 
                                        <div class="related-post-box">
                                            <a
                                                href="{{route('index.plan', $plan->name) }}">
                                                {{$plan->name}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        @endforeach






















                    </div>
                </div>





            </div>
        </div>
        </div>
    </section>

    @slot('script')
    @endslot
@endcomponent
