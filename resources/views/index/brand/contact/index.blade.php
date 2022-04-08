  @component('index.brand.layouts.content', [
    'title'=> 'تماس با ما',
      'tabTitle' => 'تماس با ما',
      'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')],['title' => ' خدمات ما',  ], ['title' => 'تماس با ما',
      'class' => 'active']],
      'show_bread' => 'inactive',
      ])

@slot('style')

@endslot


<div class="contact-header">
    <img src="{{ asset($txtdese->image) }}" alt="تماس با ما">
</div>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h6 class="contact-info-title"><i class="fas fa-map-marker"></i>دفتر ما در تهران واقع شده است
</h6>
                    <span class="contact-info-title-in">
                        {{$setting->address}}

                    </span>
                </div>
                <div class="contact-info">
                    <h6 class="contact-info-title"><i class="fas fa-phone"></i>تلفن

                    </h6>
                    <h class="contact-info-title-in">{{$setting->tell}}</h>
                </div>

            </div>
            <div class="col-lg-7">
                <div class="all-contact-social">
                  <a href="tel:{{$setting->tell}}" class="contact-social">
                        <span>{{$setting->tell}}</span>
                        <i class="fas fa-phone"></i>
                    </a>
                    <a href="{{$setting->telegram}}" class="contact-social">
                        <span>تلگرام ما</span>
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a href="{{$setting->instagram}}"
                       class="contact-social">
                        <span>اینستاگرام ما</span>
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone={{$setting->whatsapp}}&text=&source=&data=" class="contact-social">
                        <span>{{$setting->whatsapp}}</span>
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>





<section class="blog-content">
    <div class="container">
        <div class="row reset-order">
            <div class="col-lg-12">

<div class="comment-box" id="cmt">
    <div class="comment-box-header">
        <span>  تماس با ما  </span>
    </div>
    <form   action="{{ route('index.support.post') }}"
          method="post" class="comment-box-in">
          @csrf

        <span class="comment-box-in-title"><i class="fas fa-comment"></i>
            جهت ارتباط با ما لطفا اطلاعات خود را به صورت صحیح وارد نمایید</span>
        <div class="card card-body bg-light mb-2 d-none replay-text">
            <div class="replay-name">درحال ارسال پاسخ به : <b></b></div>
            <div class="close-replay-comment"><i class="fas fa-times"></i></div>

        </div>
        <div class="comment-box-in-input">

            <input name="name" type="text" placeholder="نام و نام خانوادگی"
                   value="{{old('name')}}">
            <input name="email" type="text" placeholder="ایمیل"
            value="{{old('email')}}">
            <input name="tell" type="text" placeholder="شماره تماس"
            value="{{old('tell')}}">
            <textarea name="text" placeholder="سوال خود را بپرسید">{{old('text')}}</textarea>
        </div>

        <div
        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">

{!! NoCaptcha::renderJs() !!}
{!! NoCaptcha::display() !!}
    </div>

        <button name="submit" class="send-cmt-form">ارسال</button>
    </form>
</div>
</div>
</div>
</div>
</section>





      @slot('script')
      @endslot
  @endcomponent
