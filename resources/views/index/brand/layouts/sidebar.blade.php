
                    <div class="sidebar" style="padding-top: 50px;">

                        <div class="favorite-address">
                            <img src="{{asset('sabt_files/search.png')}}" alt="استعلام برند">
                            <div class="favorite-address-title">
                                <a href="">
                                    <h5>استعلام برند</h5>
                                </a>
                                <span>جستجوی تخصصی برند</span>
                            </div>
                        </div>
                        <div class="favorite-address">
                            <img src="{{asset('sabt_files/question.png')}}" alt="سوالات متداول    ">
                            <div class="favorite-address-title">
                                <a href="{{route('index.faqs')}}">
                                    <h5>سوالات متداول  </h5>
                                </a>
                                <span>جستجوی تخصصی برند</span>
                            </div>
                        </div>
                        <div class="favorite-address">
                            <img src="{{asset('sabt_files/operator.png')}}" alt="تماس با ما  ">
                            <div class="favorite-address-title">
                                <a href="{{route('index.support')}}">
                                    <h5>  تماس با ما  </h5>
                                </a>
                                <span>جستجوی تخصصی برند</span>
                            </div>
                        </div>

    @foreach ($listpages as $listpage )

    <div class="favorite-address">
        <img src="{{asset('sabt_files/money.png')}}" alt="{{$listpage->title}}">
        <div class="favorite-address-title">
            <a href="{{ route('index.page', $listpage->title) }}">
                <h5>{{$listpage->title}}</h5>
            </a>
            <span>مشاهده خدمات</span>
        </div>
    </div>

     @endforeach


                    </div>
