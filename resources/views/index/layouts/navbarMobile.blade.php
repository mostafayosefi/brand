
<div class="rt-popup rt-popup-search">
	<div class="rt-popup-content-wrapper d-flex align-items-center">
		<button class="rt-popup-close ui-icon-exit"></button>
		<div class="rt-popup-content default-style">

			<form method="get" action="#" class="wp-search-form rt_form">
				<ul>
					<li><input type="text" class="search showtextback" placeholder="کلیدواژه خود را تایپ کنید..." name="s"><span class="search-icon ui-icon-search-1"></span></li>
				</ul>
							</form>

		</div>
	</div>
</div>
	<div class="rt-popup rt-popup-share">
		<div class="rt-popup-content-wrapper d-flex align-items-center">
			<button class="rt-popup-close ui-icon-exit"></button>
			<div class="rt-popup-content default-style">
				<div class="naturalife-share-content">
					<ul></ul>
				</div>
			</div>
		</div>
	</div>



<div class="naturalife-panel-holder ps-container ps-theme-default" data-ps-id="3c23f3b3-57bc-c2c5-2725-6765d6556e4f">
	<div class="naturalife-panel-wrapper">
		<div class="naturalife-panel-contents">




				<nav class="mobile-nav">
					<ul id="mobile-navigation" class="menu">


<li id="mobile-menu-item-801" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn"><a href="{{route('user.dashboard.index')}}"><span> پنل کاربری</span></a>
<ul class="sub-menu">


    <li id="mobile-menu-item-1" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.profile.index')}}">مشاهده پروفایل  </a> </li>
    <li id="mobile-menu-item-2" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.contact.index')}}"> اکانت های من</a> </li>
    <li id="mobile-menu-item-3" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.domain.index')}}">خدمات دامنه</a> </li>
    <li id="mobile-menu-item-4" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.profile.secret')}}">تنظیمات امنیتی</a> </li>

    <li id="mobile-menu-item-5" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.nameserver.index')}}"> خدمات nameserver </a> </li>
    <li id="mobile-menu-item-6" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">خدمات dns</a> </li>
    <li id="mobile-menu-item-7" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.finical.index')}}">مدیریت مالی </a> </li>
    <li id="mobile-menu-item-8" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('user.domain.basket.index')}}">مدیریت سفارش ها </a> </li>
    <li id="mobile-menu-item-9" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a  href="{{ route('index.user.logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">خروج </a> </li>

   <form id="logout-form" action="{{ route('index.user.logout') }}" method="POST"
   class="d-none">
   @csrf
</form>
</ul>
</li>



{{--
<li id="mobile-menu-item-801" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn"><a href="#"><span>پشتیبانی </span></a>
<ul class="sub-menu">
<li id="mobile-menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="user/addticket">ثبت تیکت</a> </li>
<li id="mobile-menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="user/viewstickets">مشاهده پیامها
  (<span style="color: #18f20d;  "   title="" >  66 پیام جدید</span>)
 </a> </li>
</ul>
</li>
 --}}


<li id="mobile-menu-item-799" data-col-size="2" data-depth="0" class="multicolumn-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children multicolumn"><a href="#"><span>خدمات و سرویس‌ها</span></a>
<ul class="sub-menu">


    @foreach($listpages as $key => $listpage)
    <li id="mobile-menu-item-2648" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('index.page', $listpage->title) }}">{{$listpage->title}}</a> </li>
    @endforeach



</ul>
</li>
<li id="mobile-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.faqs')}}"><span>سوالات متداول</span></a> </li>
<li id="mobile-menu-item-289" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.document.index')}}"><span>راهنمای وب سرویس  </span></a> </li>
<li id="mobile-menu-item-287" data-depth="0" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="#"><span>ارتباط با ما</span></a>
<ul class="sub-menu">
<li id="mobile-menu-item-1040" data-depth="1" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('index.support')}}">تماس با ما</a> </li>
</ul>
</li>
</ul>




@include('index.layouts.elementor.nav_menue', [  'name_nav' => 'check_auth'  ])






				</nav>


		<div class="side-panel-widgets-desktop">
</div>
<div class="side-panel-widgets-mobile">
</div>
<div class="side-panel-widgets-global">
</div>
		</div>
	</div>
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 400px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>





<div id="content-overlay"></div>
<div class="naturalife-panel-background"></div>
<div class="naturalife-panel-close ui-icon-exit"></div>
