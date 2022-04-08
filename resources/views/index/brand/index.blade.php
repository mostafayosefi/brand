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






            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 810px;"><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab tab-header-active" data-t="1">
                        <img src="{{asset('sabt_files/sabtesherkat.svg')}}" alt="ثبت برند ها">
                        <span>ثبت برند ها</span>
                    </div>
                </div></div><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab" data-t="2">
                        <img src="{{asset('sabt_files/hazinesabt.svg')}}" alt="ثبت برند ارزان">
                        <span>هزینه خدمات</span>
                    </div>
                </div></div><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab" data-t="3">
                        <img src="{{asset('sabt_files/moshavereh.svg')}}" alt=" مشاوره ثبت برند ">
                        <span>مشاوره آنلاین</span>
                    </div>
                </div></div><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab" data-t="4">
                        <img src="{{asset('sabt_files/branding.svg')}}" alt="برند ثبت برند">
                        <span>برند سازی</span>
                    </div>
                </div></div><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab" data-t="5">
                        <img src="{{asset('sabt_files/onlinesabt.svg')}}" alt="ثبت برند غیر حضوری">
                        <span>سایر خدمات</span>
                    </div>
                </div></div><div class="owl-item active" style="width: auto; margin-left: 35px;"><div class="item">
                    <div class="chTab" data-t="6">
                        <img src="{{asset('sabt_files/sabtsteps.svg')}}" alt="سایر خدمات">
                        <span>مراحل ثبت برند</span>
                    </div>
                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
        </div>
    </div>
    <div class="container">
        <div class="tab--content">
            <div class="tab-content-ch tab-content-1" style="">
                <div class="services-tab-body">
                    <h2>ثبت برندها</h2>
                    <p><strong>سامانه ثبت برندها</strong> ی بین المللی با داشتن سالها سابقه
مدیران خود در حوزه های ثبتی، راه اندازی کسب و کار، بازاریابی و جذب
مشتری، تنها برای شما یک برند ثبت نمی کند تا هزینه آن را از شما دریافت
کند و تمام.</p>
<p>✔ ما به شما می گوییم برای چه کاری چه برندی نیاز دارید.</p>
<p>✔ اقدامات بعد از ثبت برند چیست؟</p>
<p>✔ برای جلوگیری از مشکلات احتمالی بیمه و مالیات چه باید بکنید؟</p>
<p>✔ حالا که برند خود را راه اندازی کردید چگونه می توانید مشتری جذب کنید و در فضای اینترنت به راحتی بازاریابی کنید با کمترین هزینه.</p>
<p>مهمترین هدف ما در سامانه ثبت برندهای بین المللی تعهد و صداقت توامان است.
تعهد در زمانبندی انجام خدمات و صداقت در مشاوره به مشتریان. این تعهد در
قبال مشتریانی است که ما می خواهیم همکاری بلند مدت و دوستانه ای با آنها
داشته باشیم.</p>                        <div class="services-tab-btn">
                        <a rel="nofollow" href="#" class="blue-btn">راه های ارتباطی با ما</a>
                    </div>
                </div>
            </div>
            <div class="tab-content-ch tab-content-body tab-content-2" style="display: none;">
                <div class="services-tab-body">
                    <h2>ثبت برند ارزان</h2>
                    <p>سامانه ثبت برند بین المللی به صورت آنلاین تمامی <a href="#">هزینه ثبت برند</a>
و سایر نیازهای شما را از ابتدا به صورت شفاف به شما اعلام می کند و
هیچگونه هزینه پنهانی در ادامه روند انجام پرونده به موکلان اعلام نخواهد
شد.</p>
<p>همچنین <strong>ثبت شركت</strong> موسسه ما ، تنها موسسه در میان همکاران می
باشد که پایین ترین و ارزانترین هزینه ها را دریافت خواهد کرد. علاوه بر
آن نیاز شما در کمترین زمان و به صورت فوری به انجام خواهد رسید.</p>
<p>جهت استعلام مدارک ثبت برند و هزینه کافیست در منوی بالای سایت قسمت
تعرفه ها کلیک کنید و مدارک و هزینه کلیه خدمات را به صورت فوری بر روی
تلفن همراه خود دریافت نمایید.</p>
<p>هزینه انواع خدمات در این فرم گنجانده شده است.</p>
<p>&nbsp;</p>                        <div class="services-tab-btn">
                        <a href="#" class="blue-btn">هزینه ثبت برند</a>
                    </div>
                </div>
            </div>
            <div class="tab-content-ch tab-content-body tab-content-3" style="display: none;">
                <div class="services-tab-body">
                    <h2>مشاوره ثبت برند</h2>
                    <p>ثبت برند هم از آن مواردی است که به مشاوره های دقیق و کاربردی
نیاز دارد، متاسفانه شاهد این هستیم که برند های غیر معتبری اقدام به
مشاوره می کنند، همین موضوع باعث می شود که اطلاعات درستی به شما ارائه
نشود، از این رو ما در موسسه ثبت برند بین المللی به دنبال این هستیم که در مشاوره
های آنلاین و همچنین تلفنی خود اطلاعات درستی را به شما ارائه دهیم حتی اگر
مشتری ما نشوید.</p>
<p>در ابتدا باید به این موضوع مهم توجه داشته باشید که مشاوره برای ثبت برند ها به دو صورت انجام می شود.</p>
<ul>
<li>یکی از این موارد به این ترتیب است که متقاضی ثبت برند برای انجام کار
خود سر درگم است و به درستی نمی داند که باید از چه مرحله ای کارهای خود را
شروع کند، در این حالت مشاوران متخصص ما آمادگی دارند که اطلاعات مورد
نیاز را به شما ارائه دهند، حتی در مواردی که این مشاوره ها به تنظیم
قرارداد ختم نشود و ثبت برند شما را کارشناسان ما انجام ندهند.</li>
<li>در مواردی هم شاهد این هستیم که شخص متقاضی قصد دارد که خود مراحل ثبت
برند را انجام دهد، یعنی اطلاعات را در سامانه اداره ثبت برندها ثبت کند،
متاسفانه در این حالت کمی کار سخت می شود چون همکاران ما باید پشت تلفن جز
به جز موارد را به شما بگویند و این غیر از سامانه است و نیاز به بررسی
اساسنامه نیز هست که در سامانه اشتباه بارگزاری نشود که در این حالت به
احتمال بالا مراحل ثبت به مشکل بر می خورد.</li>
</ul>                    </div>
            </div>
            <div class="tab-content-ch tab-content-body tab-content-4" style="display: none;">
                <div class="services-tab-body">
                    <h2>برندسازی</h2>
                    <p>برند برند در واقع اسم، نشان یا عبارتیست که در کالاها یا خدمات
یک برند تحت آن نام به مصرف کنندگان عرضه می گردد. برند می تواند یک نشان،
اسم لوگو، مهر یا لفاف باشد.</p>
<p>برند یا همان نام محصول شما، زمانی مجاز به استفاده می باشد که اولا
قبلا توسط شخص یا مجموعه دیگری ثبت نشده باشد و ثانیا در وب سایت مالکیت
معنوی ثبت شده باشد. در این صورت است که حق استفاده از آن برند فقط در
اختیار شخص ثبت کننده آن خواهد بود.</p>
<p>شما می توانید فرآیند محافظت از برند خود را به ما بسپارید، انتخاب نام، طراحی یک لوگوی زیبا و ثبت آن از خدمات متنوع ما می باشد.</p>                    </div>
            </div>
            <div class="tab-content-ch tab-content-body tab-content-5" style="display: none;">
                <div class="services-tab-body">
                    <h2>ثبت برند غیر حضوری</h2>
                    <p>ابتدا لازم است بدانید که در فرآیند <a href="#" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="#">ثبت برند</a>
90 درصد اینترنتی و 10 درصد حضوری است که وکلای موسسه به صورت کاملا غیر
حضوری برای شما تمامی امور را انجام می دهند، برای اقدامات بعدی مانند
گرفتن کد اقتصادی و کد کارگاهی بیمه و گواهی ارزش افزوده نیز نیاز به حضور
شما نمی باشد. سایر خدمات بعد از ثبت که برای شما انجام می دهیم :</p>
<p>✅ <strong>پیگیری امور کد اقتصادی برند</strong></p>
<p>بعد از ثبت برندها شما برای تشکیل پرونده و بعد از آن تعیین حوزه
مالیاتی جهت انجام امور مالیاتی نیاز به اخذ یک کد ۱۲ رقمی به نام کد
اقتصادی دارید. این کد به کسب و کار حقیقی و حقوقی اعطا می گردد.</p>
<p>از بین مزایای اخذ کد اقتصادی می­توانیم به پرداخت حقوق دولت تحت نام
مالیات، تسهیل و تسریع روند بررسی دفاتر قانونی برند، احراز هویت اشخاص در
اداره مالیات و ممانعت از رقابت­های ناسالم اشاره کنیم.</p>
<p>جهت اخذ کد اقتصادی و اجتناب از فرآیند های پیچیده اداری آن با ما تماس بگیرید.</p>
<p>✅ <strong>اخذ گواهی ارزش افزوده</strong></p>
<p>فروشندگان کالا یا خدمات جهت دریافت مبلغ مالیات بر ارزش افزوده از
مشتریان خود موظف هستند که گواهینامه ارزش افزوده داشته باشند. گواهینامه
ارزش افزوده از طرف سازمان امور مالیاتی صادر می گردد.</p>
<p>اعتبار گواهی ارزش افزوده بنا بر بررسی متصدی و تشخیص حوزه مالیاتی ۶ماه
و یا یک سال می باشد که پس از اتمام تاریخ اعتبار می بایست تمدید گردد.
چنانچه این گواهی منقضی شده باشد، خریداران نبایستی هنگام خرید مبلغ مالیات
بر ارزش افزوده را پرداخت نمایند.</p>
<p>✅ <strong>پلمپ دفاتر قانونی برند</strong></p>
<p>پلمپ دفاتر برند برای مشخص نمودن فعالیت های سالیانه برند ضروری است. هر
برند و سازمانی میبایست جهت بررسی كلیه فعالیت های مالی خود و پرداخت
مالیات، دفاتر پلمپ مالیاتی که شامل یک دفتر روزنامه و یک دفتر کل می باشد
را تهیه کند (کلیه برند ها اعم از فعال و غیر فعال موظف به اخذ دفاتر پلمپ
می باشند).</p>
<p>کلیه صفحات این دفاتر در اداره مالیات و ثبت برند ها پلمپ می شوند به
این دلیل دفاتر پلمپ نامیده می شوند، لذا پلمپ دفاتر تجاری از اهمیت زیادی
برخوردار می باشد. جهت پلمپ دفاتر با ما تماس بگیرید.</p>                    </div>
            </div>
            <div class="tab-content-ch tab-content-body tab-content-6" style="display: none;">
                <div class="services-tab-body">
                    <h2>مراحل ثبت برند</h2>
                    <p>برای اینکه یک برند راه اندازی شود، نیاز است مقدمات و اقدامات
لازم برای تشکیل آن فراهم شود. مقدمات تشکیل برند می تواند شامل مراحل زیر
باشد:</p>
<ol>
<li>مرحله اول راه اندازی برند: تصمیم به تولید محصول یا ارائه خدمات با توجه به نیاز بازار.</li>
<li>مرحله دوم راه اندازی برند: داشتن سهامداران و سرمایه گذاران برای شروع کار برند.</li>
<li>مرحله سوم راه اندازی برند: بکارگیری نیروی انسانی مجرب و متخصص با توجه به نوع کسب و کار برند.</li>
<li>مرحله چهارم راه اندازی برند: انتخاب و تمرکز بر نوع کار برند.</li>
<li>مرحله پنجم راه اندازی برند: شروع کار برند به صورت رسمی</li>
<li>مرحله ششم راه اندازی برند: تعیین سمت ها و مسئولیت های تمام اعضای برند.</li>
<li>مرحله هفتم راه اندازی برند: توجه به رقبا، توجه به مشتریان جدید و
فعلی، توجه به اهداف بلند مدت و کوتاه مدت برند، توجه به استراتژیک و
تاکتیک های برند، توجه به فرصت ها و تهدیدات محیطی و ... .</li>
<li>مرحله هشتم راه اندازی برند: ارتقاء برند با ثبت برند و ارائه محصول و خدمات متمایز.</li>
</ol>
<p>چنانچه تمایل به شروع یک کسب و کار را دارید ما از ابتدا از انتخاب
موضوع برند و نحوه شروع فعالیت تا رونق آن با راه کارهای تبلیغاتی و برند
سازی در خدمت شما هستیم</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services-boxs">
            <div class="services-box">
                <h3>ثبت برندها در کمترین زمان</h3>
                <span>تایید نام برند در کمتر از 2 روز</span>
                <div class="services-box-img">
                    <img src="{{asset('sabt_files/sabtesherkat.svg')}}" alt="ثبت برند فوری">
                </div>
            </div>
            <div class="services-box">
                <h3>مشاوره ثبت برند</h3>
                <span>آنلاین، تلفنی و شبانه روزی</span>
                <div class="services-box-img">
                    <img src="{{asset('sabt_files/moshavereh.svg')}}" alt="مشاوره ثبت برند">
                </div>
            </div>
            <div class="services-box">
                <h3>برند ثبت برند</h3>
                <span>استعلام دقیق قبل از ثبت جهت اطمینان</span>
                <div class="services-box-img">
                    <img src="{{asset('sabt_files/branding.svg')}}" alt="ثبت برند بین المللی">
                </div>
            </div>
            <div class="services-box">
                <h3>اقدامات بعد از ثبت</h3>
                <span>بعد از ثبت برند نیز در کنار شما خواهیم بود</span>
                <div class="services-box-img">
                    <img src="{{asset('sabt_files/sabtsteps.svg')}}" alt="اقدامات بعد از ثبت">
                </div>
            </div>
            <div class="services-box">
                <h3>هزینه ثبت برند</h3>
                <span>خدمت با کیفیت با قیمت مناسب</span>
                <div class="services-box-img">
                    <img src="{{asset('sabt_files/hazinesabt.svg')}}" alt="هزینه ثبت برند">
                </div>
            </div>
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
        <h2>سایر خدمات ثبت برند در سایت سامانه ثبت</h2>
        <span>ثبت انواع برند و برند چه مراحل و نیازهایی دارند؟</span>
    </div>

    <div class="owl-carousel owl-other-services owl-rtl owl-loaded owl-drag">








    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(3027px, 0px, 0px); transition: all 0.75s ease 0s; width: 5045px;"><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">سایت ثبت برندها</h3>
                        <p>در حال حاضر در تمام کشور حتی برای مناطق
آزاد ( البته از سال 1400 ) از طریق سایت ثبت برندها اداره ثبت به آدرس
# است. برای تاسیس یک برند تمام مراحل اصلی در این
وب سایت انجام می گیرید.</p>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">بهترین ثبت برند</h3>
                        <p>موسسه ما با محدودیت هایی که در کسب تجربه
در این زمینه وجود داشت تشکیل شد و تا به امروز توانسته است با لطف خداوند
متعال پابرجا بماند. این درخت تنومد مدیون تجربه و سوابق همکارانی است که
در مجموعه ما همکاری می کنند.

خدمات ثبت برند بین المللی ما عبارتند از: ثبت برند ها و پیگیری ثبت انواع
برندها بدون مراجعه حضوری شما به سایت اداره کل ثبت اسناد و املاک
آذربایجان غربی، تهران، تبریز، اصفهان، شیراز، مشهد، اهواز، یزد به طور اخص
و کلیه شهرستان های ایران می باشد. خدمات ثبت برند و علائم تجاری نیز به
همین صورت و با کمترین احتمال در موسسه انجام می پذیرد که نمونه کارهای
متعدد ما را می توانید از همکاران ما دریافت نمایید.

لازم است بدانید که فقط با ارسال مدارک می توانید به صورت آنلاین برند خود
را بدون مراجعه حضوری و کمترین رفت و آمد از طریق سامانه اداره ثبت از زیر
مجموعه های اداره کل ثبت اسناد، با مشاوره تخصصی ما ثبت کنید.

ثبت برند با مسئولیت محدود
ثبت برند با مسئولیت محدود برندی است که بین دو یا چند نفر برای انجام امور
کسب و کار تشکیل می شود. در برند با مسئولیت محدود شرکا بدون افتتاح حساب،
داشتن سهام یا درصد از برند فقط تا میزان سرمایه خود در برند مسئول دیون
برند است.

سرمایه برای ثبت مسئولیت محدود باید ” حداقل صد هزار تومان ” باشد اما
برخلاف ثبت برند سهامی خاص نیاز به واریز این مبلغ در حساب برند نیاز نمی
باشد و صرفا در اساسنامه برند ذکر خواهد شد.

برند با مسئولیت محدود از پرکاربرید ترین برند های ثبت شده در اداره ثبت
برند ها می باشد. ساده ترین و پر کاربرد ترین نوع برند، ثبت برند با
مسئولیت محدود می باشد که اکثر برند هایی که ثبت می گردنند از این نوع برند
می باشند. جهت انجام امور بازرگانی و کاری در سیکل کوچک تا متوسط از ثبت
برند با مسئولیت محدود استفاده می گردد.ثبت 3 ثبت 3 ثبت 3 ثبت 3</p>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند سهامی خاص</h3>
                        <p>برند سهامی خاص به برندی گفته می شود که
سرمایه اولیه آن توسط اعضا تامین گردد. هر یک اعضا به یک مقدار سهام دار
خواهند بود و سهم الرشکته خواهند داشت. برخلاف برند سهامی عام، سهام برند
سهامی خاص فقط در اختیار اعضای خاص که همان هیات مدیره هست، خواهد بود و
عموم حق سهامداری نخواهند داشت.

در واقع منظور از برند­های سهامی خاص، برند­های تجاری است که سرمایه آنها
به سهام تقسیم می­شود و تمام سرمایه برند توسط موسسین آن تامین می­شود.
مسئولیت سهامداران در قبال برند مستقیماً وابسته به مبلغ اسمی سهام آنهاست.
لازم به ذکر است که مبلغ اسمی سهام­ها با هم برابر است.

در هنگام ثبت برند سهامی خاص می بایست پس از تعیین سرمایه برند، میزان 35
درصد از آن را در حساب برند نزد یکی از بانک ها واریز نمایند. اعتبار برند
سهامی خاص جهت گرفتن پروژه و وام و .. از برند مسئولیت محدود بیشتر است.

نکات ثبت برند سهامی خاص
جهت ثبت برند سهامی خاص، حضور حداقل 3 عضو به عنوان هیئت مدیره و ۲ نفر به
عنوان بازرس (یکی اصلی و دیگری ذخیره) الزامی است که همگی باید به سن
قانونی رسیده باشند. لازم به ذکر است که بازرسین نباید رابطه خانوادگی با
هیئت مدیره داشته باشند.

اعضای هیئت مدیره باید حداقل یک سهم داشته باشند.( غیر از موارد عضو خارج
از شرکا )
حداقل سرمایه مجاز برند سهامی خاص صد هزار تومان است که پرداخت نقدی ۳۵
درصد آن در زمان ثبت برند الزامی است که باید توسط موسسین برند تامین شود.
مسئولیت هر یک از سهامداران در قبال دیون و تعهدات برند به مبلغ اسمی سهام
وی بستگی دارد.
انتشار اوراق قرضه در برند­های سهامی خاص ممکن نیست.
سهام برند سهام خاص را نمی­توان در بازار بورس معامله کرد.
نقل و انتقال سهام برند سهامی خاص منوط به اعلام موافقت مجامع عمومی
سهامداران برند است.
صدور سهام قبل از ثبت برند غیرقانونی است و جرم شناخته می­شود.</p>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند در غرب تهران</h3>
                        <p>همچنین اگر نیاز به یک موسسه ثبت برند در
غرب تهران دارید که تمایل دارید به آنجا مراجعه کنید، ثبت موسسه ما واقع در
میدان توحید ابتدای ستارخان ( خارج از طرح ترافیک ) در خدمت شما می باشد.
در صورتی که نیاز به مشاوره حضوری دارید ما این نوید را به شما می دهیم که
کارشناسان موسسه ما به صورت کاملا رایگان حضورا با مراجعه به محل کار شما
در خدمت شما خواهند بود.
ما در تمامی مناطق غرب تهران از جمله ثبت برند در صادقیه ، بلوار فردوس ،
پونک ، شهرک غرب و ... در خدمت شما هستیم.</p>
                    </div>
                </div></div><div class="owl-item" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند در تهران</h3>
                        <p>ثبت برند در تهران با ما در کمتر از ده روز
و برای شهرستان ها حدود 15 روز است. اینکه چه برندی برای کارتان نیاز
دارید، چه مدارکی نیاز دارید و چه کارهایی را باید بعد از ثبت برندها انجام
دهید را ما به شما می گوییم. ثبت انواع برند از قبیل ثبت برند مسئولیت
محدود، ثبت برند سهامی خاص و عام، برند های تعاونی و تضامنی..
</p>
                    </div>
                </div></div><div class="owl-item" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برندهای تضامنی</h3>
                        <p>یکی دیگر از خدمات ما ثبت برندهای تضامنی
بخصوص برای صرافی ها است. برند تضامنی، برندی شخصی است که جهت انجام
فعالیت­های تجاری بین حداقل دو نفر با پذیرش مسئولیت تضامنی برپا می­شود.
بنابراین چنانچه سرمایه برند برای پرداخت بدهی­های برند کافی نباشد؛ هریک
از شرکا در برابر پرداخت بدهی­ها مسئول خواهند بود. صرافی ها نمونه خوبی
برای این برندها می باشند.


برای چه گروهی مناسبتر است؟
از آنجایی که پذیرش شراکت در یک برند تضامنی به معنای پذیرش مسئولیت
نامحدود در قبال بدهی­های برند است؛ چنین شراکتی می­تواند یک ریسک باشد.
بنابراین برند تضامنی برای افرادی که به هم اعتماد کامل دارند مانند پدر و
فرزند یا دو دوست معتمد که سرمایه چندانی هم برای تاسیس برند ندارند؛
مناسبتر است. علاوه بر این، اشخاصی که به دنبال کسب اعتماد مشتری هستند
مانند صرافی­ها نیز می­توانند از ثبت برند تضامنی بهره ببرند.

نام برند تضامنی
نام برند تضامنی بیانگر مسئولیت شرکاست. هنگام انتخاب نام برند تضامنی توجه
کنید که قید عبارت برند تضامنی و اسم حداقل یکی از شرکا الزامی است. اگر
اسم تمام شرکا در نام برند آورده نشود باید بعد از اسم شرکایی که اسمشان
قید شده از عبارت­هایی مانند “و شرکا” یا ” و برداران” استفاده کرد. اعتبار
برند در گرو اعتبار شرکاست.

پس همانطور که گفته شد برند تضامنی، برندی است که جهت انجام امور تجاری بین
دو یا چند نفر به نحوی تشکیل می شود که ضمانت پرداخت دیون برند با مسئولیت
تمام اعضا باشد. به این صورت که اگر دارایی برند برای پرداخت بدهی های
برند کافی نباشد هر یک از اعضا به میزان سهم خود می بایست در پرداخت این
دین ها اقدام نمایند. لازم به ذکر است که ذکر نام حداقل یکی از اعضا در نام
برند الزامی می باشد</p>
                    </div>
                </div></div><div class="owl-item" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">برند ثبت برند</h3>
                        <p>داشتن یک برند ثبت شده برای ارائه کالا یا
خدمات امروزه، جهت حفاظت از هویت کسب و کارتان و جلوگیری از کپی نام و
اعتبار شما ضروری است. اما ثبت برند به دلیل حجم زیاده برند های ثبت شده
کمی سخت و گاها بدون داشتن یک مشاور خوب به درازا خواهد کشید. پیشنهاد می
کنیم قبل از هرگونه اقدام با ما مشورت کنید.</p>
                    </div>
                </div></div><div class="owl-item" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">سایت ثبت برندها</h3>
                        <p>در حال حاضر در تمام کشور حتی برای مناطق
آزاد ( البته از سال 1400 ) از طریق سایت ثبت برندها اداره ثبت به آدرس
# است. برای تاسیس یک برند تمام مراحل اصلی در این
وب سایت انجام می گیرید.</p>
                    </div>
                </div></div><div class="owl-item" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">بهترین ثبت برند</h3>
                        <p>موسسه ما با محدودیت هایی که در کسب تجربه
در این زمینه وجود داشت تشکیل شد و تا به امروز توانسته است با لطف خداوند
متعال پابرجا بماند. این درخت تنومد مدیون تجربه و سوابق همکارانی است که
در مجموعه ما همکاری می کنند.

خدمات ثبت برند بین المللی ما عبارتند از: ثبت برند ها و پیگیری ثبت انواع
برندها بدون مراجعه حضوری شما به سایت اداره کل ثبت اسناد و املاک
آذربایجان غربی، تهران، تبریز، اصفهان، شیراز، مشهد، اهواز، یزد به طور اخص
و کلیه شهرستان های ایران می باشد. خدمات ثبت برند و علائم تجاری نیز به
همین صورت و با کمترین احتمال در موسسه انجام می پذیرد که نمونه کارهای
متعدد ما را می توانید از همکاران ما دریافت نمایید.

لازم است بدانید که فقط با ارسال مدارک می توانید به صورت آنلاین برند خود
را بدون مراجعه حضوری و کمترین رفت و آمد از طریق سامانه اداره ثبت از زیر
مجموعه های اداره کل ثبت اسناد، با مشاوره تخصصی ما ثبت کنید.

ثبت برند با مسئولیت محدود
ثبت برند با مسئولیت محدود برندی است که بین دو یا چند نفر برای انجام امور
کسب و کار تشکیل می شود. در برند با مسئولیت محدود شرکا بدون افتتاح حساب،
داشتن سهام یا درصد از برند فقط تا میزان سرمایه خود در برند مسئول دیون
برند است.

سرمایه برای ثبت مسئولیت محدود باید ” حداقل صد هزار تومان ” باشد اما
برخلاف ثبت برند سهامی خاص نیاز به واریز این مبلغ در حساب برند نیاز نمی
باشد و صرفا در اساسنامه برند ذکر خواهد شد.

برند با مسئولیت محدود از پرکاربرید ترین برند های ثبت شده در اداره ثبت
برند ها می باشد. ساده ترین و پر کاربرد ترین نوع برند، ثبت برند با
مسئولیت محدود می باشد که اکثر برند هایی که ثبت می گردنند از این نوع برند
می باشند. جهت انجام امور بازرگانی و کاری در سیکل کوچک تا متوسط از ثبت
برند با مسئولیت محدود استفاده می گردد.ثبت 3 ثبت 3 ثبت 3 ثبت 3</p>
                    </div>
                </div></div><div class="owl-item active" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند سهامی خاص</h3>
                        <p>برند سهامی خاص به برندی گفته می شود که
سرمایه اولیه آن توسط اعضا تامین گردد. هر یک اعضا به یک مقدار سهام دار
خواهند بود و سهم الرشکته خواهند داشت. برخلاف برند سهامی عام، سهام برند
سهامی خاص فقط در اختیار اعضای خاص که همان هیات مدیره هست، خواهد بود و
عموم حق سهامداری نخواهند داشت.

در واقع منظور از برند­های سهامی خاص، برند­های تجاری است که سرمایه آنها
به سهام تقسیم می­شود و تمام سرمایه برند توسط موسسین آن تامین می­شود.
مسئولیت سهامداران در قبال برند مستقیماً وابسته به مبلغ اسمی سهام آنهاست.
لازم به ذکر است که مبلغ اسمی سهام­ها با هم برابر است.

در هنگام ثبت برند سهامی خاص می بایست پس از تعیین سرمایه برند، میزان 35
درصد از آن را در حساب برند نزد یکی از بانک ها واریز نمایند. اعتبار برند
سهامی خاص جهت گرفتن پروژه و وام و .. از برند مسئولیت محدود بیشتر است.

نکات ثبت برند سهامی خاص
جهت ثبت برند سهامی خاص، حضور حداقل 3 عضو به عنوان هیئت مدیره و ۲ نفر به
عنوان بازرس (یکی اصلی و دیگری ذخیره) الزامی است که همگی باید به سن
قانونی رسیده باشند. لازم به ذکر است که بازرسین نباید رابطه خانوادگی با
هیئت مدیره داشته باشند.

اعضای هیئت مدیره باید حداقل یک سهم داشته باشند.( غیر از موارد عضو خارج
از شرکا )
حداقل سرمایه مجاز برند سهامی خاص صد هزار تومان است که پرداخت نقدی ۳۵
درصد آن در زمان ثبت برند الزامی است که باید توسط موسسین برند تامین شود.
مسئولیت هر یک از سهامداران در قبال دیون و تعهدات برند به مبلغ اسمی سهام
وی بستگی دارد.
انتشار اوراق قرضه در برند­های سهامی خاص ممکن نیست.
سهام برند سهام خاص را نمی­توان در بازار بورس معامله کرد.
نقل و انتقال سهام برند سهامی خاص منوط به اعلام موافقت مجامع عمومی
سهامداران برند است.
صدور سهام قبل از ثبت برند غیرقانونی است و جرم شناخته می­شود.</p>
                    </div>
                </div></div><div class="owl-item active" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند در غرب تهران</h3>
                        <p>همچنین اگر نیاز به یک موسسه ثبت برند در
غرب تهران دارید که تمایل دارید به آنجا مراجعه کنید، ثبت موسسه واقع در
میدان توحید ابتدای ستارخان ( خارج از طرح ترافیک ) در خدمت شما می باشد.
در صورتی که نیاز به مشاوره حضوری دارید ما این نوید را به شما می دهیم که
کارشناسان موسسه ما به صورت کاملا رایگان حضورا با مراجعه به محل کار شما
در خدمت شما خواهند بود.
ما در تمامی مناطق غرب تهران از جمله ثبت برند در صادقیه ، بلوار فردوس ،
پونک ، شهرک غرب و ... در خدمت شما هستیم.</p>
                    </div>
                </div></div><div class="owl-item cloned active" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برند در تهران</h3>
                        <p>ثبت برند در تهران با ما در کمتر از ده روز
و برای شهرستان ها حدود 15 روز است. اینکه چه برندی برای کارتان نیاز
دارید، چه مدارکی نیاز دارید و چه کارهایی را باید بعد از ثبت برندها انجام
دهید را ما به شما می گوییم. ثبت انواع برند از قبیل ثبت برند مسئولیت
محدود، ثبت برند سهامی خاص و عام، برند های تعاونی و تضامنی..
</p>
                    </div>
                </div></div><div class="owl-item cloned active" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">ثبت برندهای تضامنی</h3>
                        <p>یکی دیگر از خدمات ما ثبت برندهای تضامنی
بخصوص برای صرافی ها است. برند تضامنی، برندی شخصی است که جهت انجام
فعالیت­های تجاری بین حداقل دو نفر با پذیرش مسئولیت تضامنی برپا می­شود.
بنابراین چنانچه سرمایه برند برای پرداخت بدهی­های برند کافی نباشد؛ هریک
از شرکا در برابر پرداخت بدهی­ها مسئول خواهند بود. صرافی ها نمونه خوبی
برای این برندها می باشند.


برای چه گروهی مناسبتر است؟
از آنجایی که پذیرش شراکت در یک برند تضامنی به معنای پذیرش مسئولیت
نامحدود در قبال بدهی­های برند است؛ چنین شراکتی می­تواند یک ریسک باشد.
بنابراین برند تضامنی برای افرادی که به هم اعتماد کامل دارند مانند پدر و
فرزند یا دو دوست معتمد که سرمایه چندانی هم برای تاسیس برند ندارند؛
مناسبتر است. علاوه بر این، اشخاصی که به دنبال کسب اعتماد مشتری هستند
مانند صرافی­ها نیز می­توانند از ثبت برند تضامنی بهره ببرند.

نام برند تضامنی
نام برند تضامنی بیانگر مسئولیت شرکاست. هنگام انتخاب نام برند تضامنی توجه
کنید که قید عبارت برند تضامنی و اسم حداقل یکی از شرکا الزامی است. اگر
اسم تمام شرکا در نام برند آورده نشود باید بعد از اسم شرکایی که اسمشان
قید شده از عبارت­هایی مانند “و شرکا” یا ” و برداران” استفاده کرد. اعتبار
برند در گرو اعتبار شرکاست.

پس همانطور که گفته شد برند تضامنی، برندی است که جهت انجام امور تجاری بین
دو یا چند نفر به نحوی تشکیل می شود که ضمانت پرداخت دیون برند با مسئولیت
تمام اعضا باشد. به این صورت که اگر دارایی برند برای پرداخت بدهی های
برند کافی نباشد هر یک از اعضا به میزان سهم خود می بایست در پرداخت این
دین ها اقدام نمایند. لازم به ذکر است که ذکر نام حداقل یکی از اعضا در نام
برند الزامی می باشد</p>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">برند ثبت برند</h3>
                        <p>داشتن یک برند ثبت شده برای ارائه کالا یا
خدمات امروزه، جهت حفاظت از هویت کسب و کارتان و جلوگیری از کپی نام و
اعتبار شما ضروری است. اما ثبت برند به دلیل حجم زیاده برند های ثبت شده
کمی سخت و گاها بدون داشتن یک مشاور خوب به درازا خواهد کشید. پیشنهاد می
کنیم قبل از هرگونه اقدام با ما مشورت کنید.</p>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 306.286px; margin-left: 30px;"><div class="item">
                    <div class="other-services-box">
                        <h3 class="other-services-box-title">سایت ثبت برندها</h3>
                        <p>در حال حاضر در تمام کشور حتی برای مناطق
آزاد ( البته از سال 1400 ) از طریق سایت ثبت برندها اداره ثبت به آدرس
# است. برای تاسیس یک برند تمام مراحل اصلی در این
وب سایت انجام می گیرید.</p>
                    </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="far fa-chevron-right"></i></button><button type="button" role="presentation" class="owl-next"><i class="far fa-chevron-left"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
</section>

<section class="customer">
    <div class="faq-title">
        <h2>مشتریان ثبت برند بین المللی</h2>
        <span>افتخار همکاری ثبت بین المللی با صدها شخص و برند در طی سالها فعالیت</span>
    </div>
    <div class="container">
        <div class="owl-carousel owl-customer owl-rtl owl-loaded owl-drag">







        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(1091px, 0px, 0px); transition: all 0.75s ease 0s; width: 3492px;"><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer2.png')}}" alt="مشتری ثبت تغییرات برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer3.png')}}" alt="ثبت برند برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer4.png')}}" alt="ثبت تغییرات برندها">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer5.png')}}" alt="افزایش سرمایه برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer6.png')}}" alt="ثبت برندها">
                        </div>
                    </div></div><div class="owl-item active" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer1.png')}}" alt="مشتری ثبت برند">
                        </div>
                    </div></div><div class="owl-item active" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer2.png')}}" alt="مشتری ثبت تغییرات برند">
                        </div>
                    </div></div><div class="owl-item active" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer3.png')}}" alt="ثبت برند برند">
                        </div>
                    </div></div><div class="owl-item active" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer4.png')}}" alt="ثبت تغییرات برندها">
                        </div>
                    </div></div><div class="owl-item active" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer5.png')}}" alt="افزایش سرمایه برند">
                        </div>
                    </div></div><div class="owl-item" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer6.png')}}" alt="ثبت برندها">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer1.png')}}" alt="مشتری ثبت برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer2.png')}}" alt="مشتری ثبت تغییرات برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer3.png')}}" alt="ثبت برند برند">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer4.png')}}" alt="ثبت تغییرات برندها">
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 217.2px; margin-left: 1px;"><div class="items">
                        <div class="customer-box">
                            <img src="{{asset('sabt_files/customer5.png')}}" alt="افزایش سرمایه برند">
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
</section>



      @slot('script')
      @endslot
  @endcomponent
