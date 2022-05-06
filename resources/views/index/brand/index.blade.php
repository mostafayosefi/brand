  @component('index.brand.layouts.content', [
    'title'=> $mysetting->title,
      'tabTitle' => $mysetting->title,
      'breadcrumb' => [['title' => 'صفحه اصلی', 'url' => route('admin.faq.index')], ['title' => 'صفحه اصلی  ',
      'class' => 'active']],
      'show_bread' => 'inactive',
      ])

@slot('style')

@endslot



<section class="home-header">
    <div class="container">


        @foreach ($spotlites as $key =>  $spotlite)
        @if ($spotlite->id == '1')
        <div class="row align-items-center">
            <div class="col-lg-5 reset-col">
                <div class="home-header-img">
                    <img src="{{asset($spotlite->image)}}" alt="{{$spotlite->title}}">
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 mr-auto">
                <div class="home-header-text">


                    @php echo $spotlite->text; @endphp

<hr>
                     <div class="home-header-text-body">
                        <a href="#" class="blue-btn">ثبت برند</a>
                        <a href="#" class="green-btn">لیست هزینه ثبت برند</a>
                    </div>
                </div>
            </div>
        </div>

        @endif
        @endforeach


    </div>
</section>

<section class="consultant">
    <div class="container">


        @foreach ($spotlites as $key =>  $spotlite)
        @if ($spotlite->id == '2')
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="consultant-text">
                    @php echo $spotlite->text; @endphp

                </div>
            </div>
            <div class="col-lg-5">
                <div class="consultant-image">
                    <img src="{{asset($spotlite->image)}}" alt="{{$spotlite->title}}">
                </div>
            </div>
        </div>

        @endif
        @endforeach



    </div>
</section>

<section class="services-tabs">
    <div class="services-tab">
        <div class="container">
            <div class="all-chtab owl-carousel owl-rtl owl-loaded owl-drag">






            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 810px;">

                @if($comidssec)
                @foreach ($comidssec as $key => $comid )
                <div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab @if($key =='0') tab-header-active @endif " data-t="{{$key}}">
                        <img src="{{asset($comid->image)}}" alt="{{$comid->title}}">
                        <span>{{$comid->title}}</span>
                    </div>
                </div></div>

                @endforeach
                @endif


            </div></div>

            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
        </div>
    </div>
    <div class="container">
        <div class="tab--content">


            @if($comidssec)
            @foreach ($comidssec as $key=> $comid )
            <div
            @if($key =='0')
            class="tab-content-ch tab-content-{{$key}}" style=""
@else
            class="tab-content-ch tab-content-body tab-content-{{$key}}" style="display: none;"

@endif

            >
                <div class="services-tab-body">
                    @php echo $comid->text; @endphp

                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services-boxs">


            @if($comidsfirst)
            @foreach ($comidsfirst as $key=> $comid )
            <div class="services-box">
                <h3>{{$comid->title}}</h3>
                <span>{{$comid->text}}</span>
                <div class="services-box-img">
                    <img src="{{asset($comid->image)}}" alt="ثبت برند فوری">
                </div>
            </div>
            @endforeach
            @endif


        </div>
    </div>
</section>

<section class="faq">
    <div class="faq-title">
        <h3>موسسه ثبت برند بین المللی پاسخگوی فوری شما</h3>
        <span>پاسخ سوالات پر تکرار، مفید و مختصر</span>
    </div>

    <div class="acc-container">
        <div class="container">
            <div class="faq-box">



                @if($faqs)
                @foreach ($faqs->chunk($count) as $chunk)
                <div class="faq-box-in">
                @foreach ($chunk as  $key => $faq)

                      <div class="acc-btn">
                          <h4>{{$faq->question}}</h4>
                          <i class="far fa-chevron-down"></i>
                      </div>
                      <div class="acc-content">
                          <p>{{$faq->answer}}</p>
                      </div>

                @endforeach
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>

</section>






<section class="other-services">
    <div class="faq-title">
        <h2>نظرات مشتریان</h2>
        <span>مشتریان ما در مورد ما چه نظری دارند؟</span>
    </div>

    <div class="owl-carousel owl-other-services">



        @if($coment)
        @foreach($coment as $mycoment)
        <div class="item">
                    <div class="other-services-box">

                        <h3 class="other-services-box-title">{{$mycoment->title}}</h3><br>
                        <h6>{{$mycoment->role}}</h6>
                        <p>{{$mycoment->text}}</p>
                    </div>
                </div>

            @endforeach
            @endif






    </div>
</section>











<section class="other-services">
    <div class="faq-title">
        <h2>نظرات مشتریان</h2>
        <span>مشتریان ما در مورد ما چه نظری دارند؟</span>
    </div>

    <div class="owl-carousel owl-other-services owl-rtl owl-loaded owl-drag">



    <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(3027px, 0px, 0px); transition: all 0.75s ease 0s; width: 5045px;">


            @if($coment)
            @foreach($coment as $mycoment)
            <div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">{{$mycoment->title}}</h3><br>
                        <h6>{{$mycoment->role}}</h6>
                        <p>{{$mycoment->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif



            </div>


        </div>
        <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"><i class="far fa-chevron-right"></i></button>
        <button type="button" role="presentation" class="owl-next"><i class="far fa-chevron-left"></i></button>
    </div>
    <div class="owl-dots">
        <button role="button" class="owl-dot active"><span></span></button>
    </div></div>
</section>


@if($mnglogos)
<section class="customer">
    <div class="faq-title">
        <h2>مشتریان ثبت برند بین المللی</h2>
        <span>افتخار همکاری ثبت بین المللی با صدها شخص و برند در طی سالها فعالیت</span>
    </div>
    <div class="container">
        <div class="owl-carousel owl-customer owl-rtl owl-loaded owl-drag">







        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(1091px, 0px, 0px); transition: all 0.75s ease 0s; width: 3492px;">



                @foreach ($mnglogos as $mnglogo )

                <div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                    <div class="customer-box">
                        <img src="{{asset($mnglogo->image)}}" alt="{{$mnglogo->title}}"  style="width: 111px; height: 58px;" >
                    </div>
                </div></div>

                @endforeach





                </div>

                </div>

                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                </div><div class="owl-dots disabled"></div></div>
    </div>
</section>
@endif



      @slot('script')
      @endslot
  @endcomponent
