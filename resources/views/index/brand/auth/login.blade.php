@component('index.brand.layouts.content', [
    'title' => 'ورود کاربر',
    'tabTitle' => 'ورود کاربر',
    'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => 'ورود کاربر', 'class' => 'active']],
    'show_bread' => 'inactive',
    ])
    @slot('style')
    @endslot


    <div class="contact-header">
        <img src="{{ asset($txtdese->image) }}" alt=" ورود کاربر    ">
    </div>




<section class="blog-content">
    <div class="container">
        <div class="row reset-order">
            <div class="col-lg-12">

<div class="comment-box" id="cmt">

    <br>
    <br>
    <div class="comment-box-header">
        <span>  ورود کاربر      </span>
    </div>




    <form    action="{{ route('index.user.login.post') }}"
          method="post" class="comment-box-in">
          @csrf

        <span class="comment-box-in-title"><i class="fas fa-user"></i>
            جهت  ورود لطفا اطلاعات خود را به صورت صحیح وارد نمایید</span>



            @include('index.brand.layouts.form_errors')



        <div class="row">
        <div class="comment-box-in-input">

            <div class="col-lg-12">
                <label>ایمیل</label><br>
            <input name="email" type="text" placeholder="ایمیل"
                   value="{{old('email')}}">
        </div>

        <div class="col-lg-12">
            <label>رمزعبور</label><br>
            <input name="password" type="password" placeholder="رمزعبور"
                   value="{{old('password')}}">
        </div>

        <div class="col-lg-12">

        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">

{!! NoCaptcha::renderJs() !!}
{!! NoCaptcha::display() !!}
    </div>
        </div>



        </div>
        <div class="comment-box-in-input">

        </div>
        </div>


        <button name="submit" class="send-cmt-form">ورود</button>
    </form>
</div>
</div>
</div>
</div>
</section>





      @slot('script')
      @endslot
  @endcomponent

