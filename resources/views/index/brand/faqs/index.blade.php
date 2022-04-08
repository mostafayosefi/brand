  @component('index.brand.layouts.content', [
      'title' => 'سوالات متداول',
      'tabTitle' => 'سوالات متداول',
      'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')], ['title' => ' سوالات متداول'], ['title' =>
      'سوالات متداول', 'class' => 'active']],
      'show_bread' => 'inactive',
      ])
      @slot('style')
      @endslot


      <div class="contact-header">
          <img src="{{ asset($txtdese->image) }}" alt="سوالات متداول">
      </div>

      <section class="faq">
          <div class="faq-title">

            @php echo $txtdese->text; @endphp
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


      @slot('script')
      @endslot
  @endcomponent
