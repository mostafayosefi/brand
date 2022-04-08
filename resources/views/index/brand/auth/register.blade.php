@component('index.brand.layouts.content', [
    'title' => 'ثبت نام کاربر',
    'tabTitle' => 'ثبت نام کاربر',
    'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => 'ثبت نام کاربر', 'class' => 'active']],
    'show_bread' => 'inactive',
    ])
    @slot('style')
    @endslot



    <div class="contact-header">
        <img src="{{ asset($txtdese->image) }}" alt=" ثبت نام کاربر    ">
    </div>




<section class="blog-content">
    <div class="container">
        <div class="row reset-order">
            <div class="col-lg-12">

<div class="comment-box" id="cmt">
    <div class="comment-box-header">
        <span>  ثبت نام کاربر      </span>
    </div>




    <form  action="{{route('index.user.register.post')}}"
          method="post" class="comment-box-in">
          @csrf

        <span class="comment-box-in-title"><i class="fas fa-user"></i>
            جهت  ثبت نام لطفا اطلاعات خود را به صورت صحیح وارد نمایید</span>



            @include('index.brand.layouts.form_errors')



        <div class="row">
        <div class="comment-box-in-input">

             <input name="name" type="text" placeholder="نام و نام خانوادگی"
                   value="{{old('name')}}"   required="required" >

             <input name="email" type="text" placeholder="ایمیل"
                   value="{{old('email')}}"   required="required" >


             <input name="password" type="password" placeholder="رمزعبور"
                   value="{{old('password')}}"   required="required" >


             <input name="password_confirmation" type="password" placeholder="تکرار رمزعبور"
                   value="{{old('password_confirmation')}}"   required="required" >


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


        <button name="submit" class="send-cmt-form">ثبت نام</button>
    </form>
</div>
</div>
</div>
</div>
</section>





      @slot('script')
      @endslot
  @endcomponent

