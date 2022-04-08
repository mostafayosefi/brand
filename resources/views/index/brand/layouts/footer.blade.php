
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-about">
                    <h3 class="footer-title">{{$setting->title}}</h3>
                    <p>{{$setting->description}}</p>
                 </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-service">
                    <h3 class="footer-title">لینک های مهم</h3>
					<ul id="menu-footer-site" class="menu-footer-site">
<li id="menu-item-3171" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3171"><i class="far fa-chevron-left"></i><a href="{{ route('index.home') }}"> خانه</a></li>
<li id="menu-item-3172" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3172"><i class="far fa-chevron-left"></i><a href="#">استعلام سفارش    </a></li>
<li id="menu-item-3175" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3175"><i class="far fa-chevron-left"></i><a href="{{ route('index.faqs') }}">سوالات متداول    </a></li>
<li id="menu-item-3173" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3173"><i class="far fa-chevron-left"></i><a href="{{ route('index.support') }}">تماس با ما  </a></li>
<li id="menu-item-3173" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3173"><i class="far fa-chevron-left"></i><a href="{{ route('index.user.login') }}">ورود      </a></li>
<li id="menu-item-3173" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3173"><i class="far fa-chevron-left"></i><a href="{{ route('index.user.register') }}">ثبت نام      </a></li>
</ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-blog">
					 <h3 class="footer-title">آدرس</h3>
                    <p>{{$setting->address}}</p>
                    <div class="footer-about-btn">
                        <a href="tel:{{$setting->tell}}" class="blue-btn">{{$setting->tell}}<i class="fas fa-phone"></i></a>
                        <a rel="nofollow" href="{{ route('index.support') }}" class="green-btn">پشتیبانی<i class="fas fa-headset"></i></a>
                    </div>

                </div>




            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-in">

                <span>{{$setting->fcopy}}</span>

            </div>
        </div>
    </div>
</footer>
