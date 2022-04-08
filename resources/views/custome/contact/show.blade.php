  @component('custome.layouts.content', [
      'title' => 'مشاهده اکانت',
      'tabTitle' => ' مشاهده اکانت',
      'breadcrumb' => [['title' => 'لیست اکانت های من ', 'url' => route('user.contact.index')], ['title' => 'مشاهده اکانت  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($contact == Null)
@include('admin.errors.404')
@elseif($contact != Null)

@include('custome.contact.form_show', [ $contact , 'oper' => 'contact'  ])



@endif

      </div>













      @slot('script')
      @endslot
  @endcomponent
