@component('index.layouts.content',[
    'title'=>'  تیکت ها',
    'tabTitle'=>'تیکت ها    ',
    'breadcrumb'=>[
            ['title'=>'تیکت ها  ','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'ticket'   ])




<div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar"  >
    <div class="content-row-wrapper row default">

        <main class="col col-lg-12 col-12 content fullwidth">
            <div class="column-inner">
                <div
                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">


{{-- <style>  .fas {  color: red !important; } </style> --}}


                    @if($tickets)

                    <h1 style="text-align: center;">تیکت های من</h1>



                    <table class="table table-bordered "   >
                        <thead>
                            <tr>
                                <th>  ردیف </th>
                                <th>  NikName </th>
                                <th>  FullName </th>
                                <th> مشاهده</th>
                                <th> ویرایش</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($tickets as $key => $admin)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                 <td>{{$admin->title}}</td>
                                <td>{{ date_frmat($admin->created_at) }}</td>
                                <td> <a href="{{route('user.contact.show' , $admin )}}" class="">   <i aria-hidden="true" class="fas fa-eye"   ></i> </a>
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

