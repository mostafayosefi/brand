@component('index.brand.layouts.content', [
    'title'=>$mypage->title,
      'tabTitle' => $mypage->title,
      'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')],['title' => ' خدمات ما',  ], ['title' => $mypage->title,
      'class' => 'active']],
      'show_bread' => 'active',
      ])

@slot('style')

@endslot


    <section class="blog-content">
        <div class="container">
            <div class="row reset-order">
                <div class="col-xl-3 col-lg-4">

 @include('index.brand.layouts.sidebar')




                </div>
                <div class="col-xl-9 col-lg-8">
                    <div id="find-h" class="blog-content-box">

                    <?php echo $mypage->text; ?>



</div>
</div>





                          </div>
            </div>
        </div>
    </section>

      @slot('script')
      @endslot
  @endcomponent
