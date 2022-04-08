@component('index.layouts.content',[
    'title'=>'اکانت های من ',
    'tabTitle'=>'اکانت های من',
    'breadcrumb'=>[
            ['title'=>'اکانت های من','class' => 'active']
    ]])

@slot('style')

@endslot

@include('index.layouts.navbar_body', [  'name_nav' => 'contact'   ])



<div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar"  >
    <div class="content-row-wrapper row default">

        <main class="col col-lg-12 col-12 content fullwidth">
            <div class="column-inner">
                <div
                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">


{{-- <style>  .fas {  color: red !important; } </style> --}}


                    @if($contacts)

                    <h1 style="text-align: center;">اکانت های من</h1>



                    <table class="table table-bordered "   >
                        <thead>
                            <tr>
                                <th>  ردیف </th>
                                <th>  NikName </th>
                                <th>  FullName </th>
                                <th>  Email </th>
                                <th>  Default </th>
                                <th> مشاهده</th>
                                <th> ویرایش</th> 
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($contacts as $key => $admin)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$admin->nikname}}</td>
                                <td>{{$admin->full_name}}</td>
                                <td>{{$admin->email}}</td>
                                <td><a href="{{route('user.contact.default' , $admin )}}" class="">  {{ getstatusdefault($admin->default) }}</a></td>
                                <td>
                                    <a href="{{route('user.contact.show' , $admin )}}" class="">   <i aria-hidden="true" class="fas fa-eye"   ></i> </a>
                                    </td>
                                    <td> <a  href="{{route('user.contact.edit' , $admin )}}"  class="">   <i aria-hidden="true" class="fas fa-edit"></i> </a>
                                        </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>


                    @endif

                </div>

            </div>
        </main>


    </div>
</div>

@slot('script')
@endslot

 @endcomponent
