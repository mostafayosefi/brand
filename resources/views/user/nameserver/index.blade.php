@component('index.layouts.content',[
    'title'=>'مدیریت NameServer',
    'tabTitle'=>'مدیریت NameServer',
    'breadcrumb'=>[
            ['title'=>'مدیریت NameServer','class' => 'active']
    ]])

@slot('style')

@endslot

@include('index.layouts.navbar_body', [  'name_nav' => 'nameserver'   ])



<div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar"  >
    <div class="content-row-wrapper row default">

        <main class="col col-lg-12 col-12 content fullwidth">
            <div class="column-inner">
                <div
                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">


{{-- <style>  .fas {  color: red !important; } </style> --}}


                    @if($namesevers)

                    <h1 style="text-align: center;">مدیریت NameServer</h1>



                    <table class="table table-bordered "   >
                        <thead>
                            <tr>
                                <th>  ردیف </th>
                                <th>  HostName </th>
                                <th>  ip 1 </th>
                                <th> Domain </th>
                                <th> مشاهده</th>
                                <th> ویرایش</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($namesevers as $key => $admin)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{$admin->newhost}}</td>
                                <td>{{$admin->ip1}}</td>
                                <td>{{$admin->domain->domain}}</td>
                                 <td>
                                    <a href="{{route('user.nameserver.show' , $admin )}}" class="">   <i aria-hidden="true" class="fas fa-eye"   ></i> </a>
                                    </td>
                                    <td> <a  href="{{route('user.nameserver.edit' , $admin )}}"  class="">   <i aria-hidden="true" class="fas fa-edit"></i> </a>
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
