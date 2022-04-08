

    <div class="naturalife-top-bar">
        <div class="top-bar-inner d-flex align-items-center">
            <div class="top-bar-left d-flex align-items-center">
                <div id="nav_menu-5" class="topbar-widget widget widget_nav_menu">
                    <div class="menu-sub-header-container">

                        <ul id="menu-sub-header" class="menu">
                            <li id="menu-item-2220"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2220"><a
                                    href="{{route('index.support')}}">تماس با ما</a></li>
                            <li id="menu-item-2220"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2220"><a
                                    href="{{route('index.home')}}"> صفحه نخست</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-bar-right d-flex align-items-center">
                <div id="social_media_icons-2" class="topbar-widget widget widget_social_media_icons">
                    <div class="naturalife-social-media-widget">
                        <ul class="social_media inline-list">
                            <li class="instagram"><a class="ui-icon-instagram" target="_blank" href="{{$setting->instagram}}"
                                    title="Instagram" rel="nofollow"><span>اینستاگرام TiTlE </span></a></li>
                            <li class="linkedin"><a class="ui-icon-linkedin" target="_blank" href="linkedin"
                                    title="Linkedin" rel="nofollow"><span>لینکدین TiTlE </span></a></li>
                            <li class="telegram"><a class="ui-icon-telegram" target="_blank" href="{{$setting->telegram}}"
                                    title="Telegram" rel="nofollow"><span>تلگرام {{$setting->title}} </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <header class="top-header" data-color="dark">
        <div class="main-header-holder naturalife-dark-header dynamic-skin">
            <div class="header-elements">

                <div class="header-row first">
                    <div class="header-col left">

                        <div id="logo" class="site-logo">
                            <a href="{{route('index.home')}}" title=" TiTlE "><img width="6657" height="2639" src="{{ asset($setting->logo) }}"
                                    alt=" TiTlE " class="dark-logo logo-image lazyloaded"
                                    data-ll-status="loaded"><noscript><img width="6657" height="2639"
                                        src="{{ asset($setting->logo) }}" alt=" TiTlE "
                                        class="dark-logo logo-image" /></noscript><img width="6657" height="2639"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%206657%202639&#39;%3E%3C/svg%3E"
                                    alt=" TiTlE " class="light-logo logo-image"
                                    data-lazy-src="{{ asset($setting->logo) }}"><noscript><img width="6657" height="2639"
                                        src="{{ asset($setting->logo) }}" alt=" TiTlE "
                                        class="light-logo logo-image" /></noscript></a>
                        </div>


    @if(auth()->guard('user')->user())
   <nav class="main-menu-wrapper">
   <ul class="main-menu">
    @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_panel'  ])

    </ul>
    </nav>
    @endif

                <nav class="main-menu-wrapper">
                <ul class="main-menu">
                    @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_home'  ])
                    @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_allmenue'  ])


    </ul></nav>

                        </div>

                        <div class="header-col right">

    <div id="custom_html-2" class="widget_text header-widget widget widget_custom_html">

                            <div class="textwidget custom-html-widget">


@guest
 @else
@endguest


        @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'check_auth'  ])


    </div>
    </div>



                        </div>
                    </div><!-- / .header-row.first -->


                </div><!-- / .header-elements -->
            </div><!-- / .main-header-header -->

                    <div class="sticky-header-holder">
                <div class="header-elements">
                    <div class="header-row naturalife-dark-header">
                        <div class="header-col left">


            <div id="sticky-logo" class="site-logo">
                 <a href="{{route('index.home')}}" title=" TiTlE "><img width="4657" height="1847" src="{{ asset($setting->logo) }}" alt=" TiTlE " class="sticky-logo lazyloaded" data-ll-status="loaded"><noscript><img width="4657" height="1847" src="{{ asset($setting->logo) }}" alt="" class="sticky-logo" /></noscript></a>
            </div>

                        </div>
                                            <div class="header-col center">

                <nav class="main-menu-wrapper">
                <ul class="main-menu">

     @if(auth()->guard('user')->user())
     @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_panel'  ])
    @endif

    @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_home'  ])
    @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'nav_allmenue'  ])



    </ul></nav>

                        </div>

                        <div class="header-col right">

    <div id="custom_html-2" class="widget_text header-widget widget widget_custom_html">

                            <div class="textwidget custom-html-widget">

        @include('index.layouts.elementor.nav_menue', [  'name_nav' => 'check_auth'  ])

 

    </div>
    </div>


 

                                        <div class="header-tools">
                    <ul>
    <li class="naturalife-sidepanel-button-holder"><a href="#/#" class="naturalife-sidepanel-button"><span></span><span></span><span></span></a></li>
                    </ul>
                </div><!-- / end .nav-buttons -->

                        </div>
                    </div><!-- / .header-row.first -->
                </div>
            </div><!-- / .sticky-header-header -->
                </header>



                <header class="mobile-header">
                    <div class="mobile-header-holder">
                        <div class="header-elements">
                            <div class="header-row naturalife-dark-header">
                                <div class="header-col left">


                        <div id="mobile-logo" class="mobile-logo-holder">
                             <a href="{{route('index.home')}}" title=" TiTlE "><img width="6657" height="2639" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%206657%202639&#39;%3E%3C/svg%3E" alt=" TiTlE " class="mobile-logo logo-auto-height" data-lazy-src="{{ asset($setting->logo) }}"><noscript><img width="6657" height="2639" src="{{ asset($setting->logo) }}" alt="" class="mobile-logo logo-auto-height" /></noscript></a>
                        </div><!-- / end #mobile-logo -->



                                </div>

                                <div class="header-col right">
                                                <div class="header-tools">
                                <ul>

                <li class="naturalife-sidepanel-button-holder"><a href="#/#" class="naturalife-sidepanel-button"><span></span><span></span><span></span></a></li>
                                </ul>
                            </div><!-- / end .nav-buttons -->

                                </div>
                            </div><!-- / .header-row -->
                        </div>
                    </div><!-- / .mobile-header-header -->
                </header>

