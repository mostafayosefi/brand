
@if($name_nav=='check_auth')

@if(auth()->guard('user')->user())

<div class="button_wrapper">
    <a href="{{route('user.dashboard.index')}}" class="button_  style-1">
    <span style="font-size:18px;padding:8px 15px 8px 15px">  {{auth()->guard('user')->user()->name }}</span>
    <span style="font-size:18px;padding:8px 15px 8px 15px">مدیریت پنل من</span></a></div>
    @else

    <div class="button_wrapper">
        <a href="{{route('index.user.login')}}" class="button_  style-1">
        <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span>
        <span style="font-size:18px;padding:8px 15px 8px 15px">ورود</span></a></div>

                                <div class="button_wrapper">
        <a href="{{route('index.user.register')}}" class="button_  style-1">
        <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span>
        <span style="font-size:18px;padding:8px 15px 8px 15px">ثبت نام</span></a></div>

        @endif


@endif



@if($name_nav=='nav_panel')

<li id="menu-item-800" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded">
    <a href="#"><span> پنل </span></a>
   <ul class="sub-menu multicolumn-holder" style="width: 620px;">
   <li>
   <ul class="sub-menu">

    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.dashboard.index')}}">پنل کاربری  </a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.profile.index')}}">مشاهده پروفایل  </a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="{{route('user.profile.secret')}}">تنظیمات امنیتی</a></li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.contact.index')}}"> اکانت های من</a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.domain.index')}}">خدمات دامنه</a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">خدمات ترانسفر</a> </li>
   </ul>
   </li>
   <li>
   <ul class="sub-menu">
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.nameserver.index')}}"> خدمات nameserver </a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">خدمات dns</a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.finical.index')}}">مدیریت مالی </a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.domain.basket.index')}}">مدیریت سفارش ها </a> </li>
   <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a  href="{{ route('index.user.logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">خروج </a> </li>
   <form id="logout-form" action="{{ route('index.user.logout') }}" method="POST"
   class="d-none">
   @csrf
</form>


{{--    <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">مشاهده پیامها
     (<span style="color: #18f20d;  "   title="" >  8 پیام جدید</span>)
    </a> </li> --}}
   </ul>
   </li>
   </ul>
   </li>

@endif



@if($name_nav=='nav_home')
@if(auth()->guard('user')->user())
@else
<li id="menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.home')}}"><span>صفحه نخست</span></a> </li>
@endif

@endif




@if($name_nav=='nav_allmenue')



@if(auth()->guard('user')->user())
<li id="sticky-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.domain.check')}}"><span>بررسی دامنه </span></a> </li>
@else
<li id="sticky-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.check')}}"><span>بررسی دامنه </span></a> </li>
@endif

<li id="sticky-menu-item-799" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn submenu-loaded"><a href="#/#"><span>خدمات  و سرویس‌ها</span></a>
    <ul class="sub-menu multicolumn-holder" style="width: 620px;">
    <li><ul class="sub-menu">
        @foreach($listpages as $key => $listpage)
        <li id="menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('index.page', $listpage->title) }}">{{$listpage->title}}</a> </li>
        @endforeach    </ul></li>
    </ul>
    </li>


    <li id="sticky-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.document.index')}}"><span>راهنمای وب سرویس  </span></a> </li>

    <li id="sticky-menu-item-288" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.faqs')}}"><span>سوالات متداول</span></a> </li>
    <li id="sticky-menu-item-287" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu-loaded"><a href="{{route('index.support')}}"><span>ارتباط با ما</span></a>
    <ul class="sub-menu">
    <li id="sticky-menu-item-1040" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.support')}}">تماس با ما</a> </li>
    </ul>
    </li>

    @endif
