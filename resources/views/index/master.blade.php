<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{-- سیستم خدمات هاست و دامنه --}}
         {{ $tabTitle ?? '' }}</title>





         <link rel="preload" as="style" href="{{ asset('telnum_files/css') }}">
         <link rel="stylesheet" href="{{ asset('telnum_files/css') }}" media="all" onload="this.media=&#39;all&#39;">


<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
<link href="{{ asset('telnum_files/jquery.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/jquery-migrate.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/v4-shims.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/app-min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/imagesloaded.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/webpack-pro.runtime.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/webpack.runtime.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/frontend-modules.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/frontend.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/waypoints.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/core.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/swiper.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/share-link.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/dialog.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/frontend.min.js') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/preloaded-elements-handlers.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/preloaded-modules.min.js.download') }}" rel="preload" as="script">
<link href="{{ asset('telnum_files/jquery.sticky.min.js.download') }}" rel="preload" as="script">


         <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
            </style>


<link rel="stylesheet" href="{{ asset('telnum_files/app-min.css') }}">

 <link data-minify="1" rel="stylesheet" id="naturalife-style-all-css" href="{{ asset('telnum_files/app-min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="fontello-css" href="{{ asset('telnum_files/fontello.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="naturalife-style-rtl-css" href="{{ asset('telnum_files/rtl-min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="naturalife-theme-style-css" href="{{ asset('telnum_files/style.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="naturalife-dynamic-css" href="{{ asset('telnum_files/dynamic-style.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="wp-block-library-rtl-css" href="{{ asset('telnum_files/style-rtl.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="tablepress-default-css" href="{{ asset('telnum_files/default-rtl.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="elementor-icons-css" href="{{ asset('telnum_files/elementor-icons.min.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="elementor-frontend-legacy-css" href="{{ asset('telnum_files/frontend-legacy-rtl.min.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('telnum_files/frontend-rtl.min.css') }}" type="text/css" media="all">

{{--          <style id="elementor-frontend-inline-css" type="text/css">

            @font-face{font-family:eicons; src:url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.eot?5.10.0);
            src:url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.eot?5.10.0#iefix) format("embedded-opentype"),
            url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.woff2?5.10.0) format("woff2"),
            url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.woff?5.10.0) format("woff"),
            url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.ttf?5.10.0) format("truetype"),
            url({{env('APP_URL')}}/build/telnum_files/fonts/eicons/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
            </style> --}}

            <link data-minify="1" rel="stylesheet" id="elementor-post-2723-css" href="{{ asset('telnum_files/post-2723.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="elementor-pro-css" href="{{ asset('telnum_files/frontend-rtl.min(1).css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('telnum_files/all.min.css') }}" type="text/css" media="all">
            <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('telnum_files/v4-shims.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="elementor-post-2-css" href="{{ asset('telnum_files/post-2.css') }}" type="text/css" media="all">

            <link data-minify="1" rel='stylesheet' id='elementor-post-52-css'  href="{{ asset('telnum_files/post-52.css?ver=1631767702') }}"  type='text/css' media='all' />

            <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('telnum_files/fontawesome.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('telnum_files/brands.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('telnum_files/solid.min.css') }}" type="text/css" media="all">
            <link data-minify="1" rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{ asset('telnum_files/regular.min.css') }}" type="text/css" media="all">
            <script type="text/javascript" src="{{ asset('telnum_files/jquery.min.js.download') }}" id="jquery-core-js') }}" ></script>
            <script type="text/javascript" src="{{ asset('telnum_files/jquery-migrate.min.js.download') }}"  id="jquery-migrate-js"></script>
            <script type="text/javascript" src="{{ asset('telnum_files/v4-shims.min.js.download') }}"  id="font-awesome-4-shim-js"></script>

            <link data-minify="1" rel='stylesheet' id='elementor-post-2723-css'  href="{{ asset('telnum_files/post-2723.css?ver=1631722801') }}"  type='text/css' media='all' />
            <link data-minify="1" rel='stylesheet' id='elementor-post-2792-css'  href="{{ asset('telnum_files/post-2792.css?ver=1631770344') }}"  type='text/css' media='all' />
            <link data-minify="1" rel='stylesheet' id='elementor-post-245-css'  href="{{ asset('telnum_files/post-245.css?ver=1631732859') }}"  type='text/css' media='all' />

            <link rel="shortcut icon" href="{{ asset($setting->favicon) }}">
  <link data-minify="1" rel='stylesheet'   href="{{ asset('telnum_files/mystyle.css') }}"  type='text/css' media='all' />



{{-- <link data-minify="1" rel='stylesheet' id='elementor-post-2723-css'  href="{{ asset('telnum_files/post-52.css?ver=1631767702') }}"  type='text/css' media='all' />
<link data-minify="1" rel="stylesheet" id="elementor-post-2-css" href="{{ asset('telnum_files/post-2.css') }}"  type="text/css" media="all">
<link data-minify="1" rel='stylesheet' id='elementor-post-52-css'  href="{{ asset('telnum_files/post-52.css?ver=1631767702') }}"  type='text/css' media='all' />
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('telnum_files/fontawesome.min.css" type="text/css') }}"  media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('telnum_files/brands.min.css') }}"  type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('telnum_files/solid.min.css') }}"  type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{ asset('telnum_files/regular.min.css') }}"  type="text/css" media="all">
<script type="text/javascript" src="{{ asset('telnum_files/jquery.min.js.download" id="jquery-core-js') }}" ></script>
<script type="text/javascript" src="{{ asset('telnum_files/jquery-migrate.min.js.download" id="jquery-migrate-js') }}" ></script>
<script type="text/javascript" src="{{ asset('telnum_files/v4-shims.min.js.download" id="font-awesome-4-shim-js') }}" ></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<style>
    .container {
        max-width: 500px;
    }
    .reload {
        font-family: Lucida Sans Unicode
    }
</style>



<link data-minify="1" rel='stylesheet'   href="{{ asset('telnum_files/mystyle.css') }}"  type='text/css' media='all' />


    @yield('style')
</head>

<body class="rtl home page-template-default page page-id-2 sticky-header sticky-header-style-2 sticky-logo header-style-1 header-sidepanel-mobile header-search-button naturalife-default-header-width naturalife-fullwidth-sticky-header-width naturalife-default-footer-width has-sub-header sticky-mobile-header elementor-default elementor-kit-2723 elementor-page elementor-page-2 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
    <!-- background wrapper -->



{{-- @include('index.layouts.sidebar') --}}



<div id="container">
@include('index.layouts.navbar')

<div id="main-content">


    @yield('content')

</div>




@include('index.layouts.footer')






</div>




@include('index.layouts.navbarMobile')



<script type="text/javascript" id="rocket-browser-checker-js-after">
    "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
    </script>


    <script type="text/javascript" id="rocket-preload-links-js-after">
    (function() {
    "use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
    }());
    </script>

    <script type="text/javascript" src="{{ asset('telnum_files/app-min.js.download') }}" id="naturalife-scripts-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/wp-embed.min.js.download') }}"  id="wp-embed-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/imagesloaded.min.js.download') }}"  id="imagesloaded-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/webpack-pro.runtime.min.js.download') }}"  id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/webpack.runtime.min.js.download') }}"  id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/frontend-modules.min.js.download') }}"  id="elementor-frontend-modules-js"></script>

    <script type="text/javascript" src="{{ asset('telnum_files/frontend.min.js.download') }}"  id="elementor-pro-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/waypoints.min.js.download') }}"  id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/core.min.js.download') }}"  id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/swiper.min.js.download') }}"  id="swiper-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/share-link.min.js.download') }}"  id="share-link-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/dialog.min.js.download') }}"  id="elementor-dialog-js"></script>

    <script type="text/javascript" src="{{ asset('telnum_files/frontend.min.js(1).download') }}"  id="elementor-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/preloaded-elements-handlers.min.js.download') }}"  id="pro-preloaded-elements-handlers-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/preloaded-modules.min.js.download') }}"  id="preloaded-modules-js"></script>
    <script type="text/javascript" src="{{ asset('telnum_files/jquery.sticky.min.js.download') }}"  id="e-sticky-js"></script>


     <span id="elementor-device-mode" class="elementor-screen-only"></span><span id="elementor-device-mode" class="elementor-screen-only"></span><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>







@include('sweetalert::alert')

@yield('script')

</body>
</html>
