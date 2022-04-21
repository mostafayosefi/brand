@component('index.brand.layouts.content', [
    'title'=>$myplan->name,
      'tabTitle' => $myplan->name,
      'breadcrumb' => [['title' => ' خانه', 'url' => route('index.home')],['title' => 'پلانهای شرکت', 'url' => route('index.plan')  ], ['title' => $myplan->name,
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

                    <?php echo $myplan->text; ?>


<h2>امکانات پلان</h2>
<hr>

@if($myplan->company_properties)
@foreach ($myplan->company_properties as $company_propertie )
<ul><li><strong> {{$company_propertie->name}}</strong>  </li></ul>
@endforeach
@endif

<hr>

<blockquote class="wp-block-quote"><p><strong>
هزینه پلان :
{{flage_price($myplan->price)}}
</strong></p></blockquote>





                    <div class='gform_footer top_label'>

                        <a href="{{route('user.company.request.create', $myplan->id) }}" type='submit' id='gform_submit_button_1'  class='gform_but'>
                        <input type='submit' id='gform_submit_button_1' class='gform_button button'
                            value='درخواست پلان ' />
  </a>


                    </div>

</div>
</div>





                          </div>
            </div>
        </div>
    </section>

      @slot('script')
      @endslot
  @endcomponent
