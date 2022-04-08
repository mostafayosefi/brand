@component('index.layouts.content',[
    'title'=>'مشاهده اطلاعات Nameserver ',
    'tabTitle'=>'مشاهده اطلاعات Nameserver ',
    'breadcrumb'=>[
            ['title'=>'مشاهده اطلاعات Nameserver ','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'nameserver'   ])



<div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar" style="direction: ltr;">
    <div class="content-row-wrapper row default">

        <main class="col col-lg-12 col-12 content fullwidth">
            <div class="column-inner">
                <div
                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">

                    <h1 style="text-align: center;">اطلاعات Nameserver</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    <a href="{{route('user.nameserver.edit' , $nameserver->id)}}">
                                        ویرایش اطلاعات Nameserver <i aria-hidden="true" class="fas fa-edit"></i> </a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>HostName</td>
                                <td> {{ $nameserver->newhost }}</td>
                            </tr>
                            <tr>
                                <td>ip 1</td>
                                <td> {{ $nameserver->ip1 }}</td>
                            </tr>
                            <tr>
                                <td>ip 2</td>
                                <td> {{ $nameserver->ip2 }}</td>
                            </tr>
                            <tr>
                                <td>ip 3</td>
                                <td> {{ $nameserver->ip3 }}</td>
                            </tr>
                            <tr>
                                <td>Domain</td>
                                <td> {{ $nameserver->domain->domain }}</td>
                            </tr>


                            <tr>
                                <td>تاریخ ثبت  </td>
                                <td>{{ date_frmat($nameserver->created_at) }}</td>
                            </tr>


{{-- <style>  .fas {  color: red !important; } </style> --}}

                            <tr>
                                <td> Delete</td>
                                <td>

                                    <form class="forms-sample" method="POST" action="{{route('user.nameserver.destroy' , $nameserver )}}" >
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit"   class="btn btn-danger"  style="color: red !important; "   ><i aria-hidden="true" class="fas fa-trash"></i> حذف اکانت </button>
                                        </form>
 </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </main>


    </div>
</div>

@slot('script')
@endslot

 @endcomponent
