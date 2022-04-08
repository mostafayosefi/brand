
<header id="home-header" class="animate__animated">
    <div class="container">
        <div class="menu">
            <a href="{{ route('index.home') }}">
                <img src="{{$setting->logo}}" alt="{{$setting->title}}" style="width: 111px; height: 60px;">
                {{-- <img src="{{asset('sabt_files/logo-1.png')}}" alt="{{$setting->title}}"  style="width: 111px; height: 60px;"> --}}
            </a>
            <i class="far fa-bars responsive-menu"></i>
			<div class="menu-%d9%85%d9%86%d9%88-%d8%a7%d8%b5%d9%84%db%8c-container">

                <ul id="menu-ul" class="menu-ul">

<li><a title="صفحه نخست  " rel="nofollow" href="{{ route('index.home') }}">صفحه نخست  </a></li>

<li class="subMenus"><a title="خدمات ما " href="#">خدمات ما <i class="far fa-chevron-down"></i> </a>
    <ul class="sub-menu">
        @foreach ($listpages as $listpage )
        <li><a title="{{$listpage->title}}" href="{{ route('index.page', $listpage->title) }}">{{$listpage->title}}</a></li>
        @endforeach
    </ul>
</li>

<li><a title=" استعلام سفارش  " rel="nofollow" href="{{ route('index.home') }}">  استعلام سفارش  </a></li>


<li><a title="یوالات متداول  " rel="nofollow" href="{{ route('index.faqs') }}">سوالات متداول  </a></li>
<li><a title="تماس با ما" rel="nofollow" href="{{ route('index.support') }}">تماس با ما</a></li>
</ul></div>
<div class="header-contact">



    @if(auth()->guard('user')->user())
    <a class="blue-btn" style="background-color: green;  "  target="_blank" href="{{ route('user.dashboard.index') }}"> {{auth()->guard('user')->user()->name}} <i class="fa fa-user"></i></a>

    @else

    <a class="blue-btn" style="background-color: green; height: 30px;  " href="{{ route('index.user.login') }}"> ورود <i class="fa fa-user"></i></a>

    <a class="blue-btn" style="background-color: blue; height: 30px;  " href="{{ route('index.user.register') }}"> ثبت نام <i class="fa fa-user-plus"></i></a>

    @endif

            </div>


        </div>
    </div>
</header>
