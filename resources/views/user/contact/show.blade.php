@component('index.layouts.content',[
    'title'=>'مشاهده اطلاعات اکانت ',
    'tabTitle'=>'مشاهده اطلاعات اکانت ',
    'breadcrumb'=>[
            ['title'=>'مشاهده اطلاعات اکانت ','class' => 'active']
    ]])


@include('index.layouts.navbar_body', [  'name_nav' => 'contact'   ])



<div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar" style="direction: ltr;">
    <div class="content-row-wrapper row default">

        <main class="col col-lg-12 col-12 content fullwidth">
            <div class="column-inner">
                <div
                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">

                    <h1 style="text-align: center;">اطلاعات اکانت</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    <a href="{{route('user.contact.edit' , $contact->id)}}">
                                        ویرایش اطلاعات اکانت <i aria-hidden="true" class="fas fa-edit"></i> </a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Firstname</td>
                                <td> {{ $contact->firstname }}</td>
                            </tr>
                            <tr>
                                <td>Lastname</td>
                                <td> {{ $contact->lastname }}</td>
                            </tr>
                            <tr>
                                <td>Nikname</td>
                                <td> {{ $contact->nikname }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td> {{ $contact->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> {{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <td> Zip Code/Postal</td>
                                <td> {{ $contact->zip }}</td>
                            </tr>
                            <tr>
                                <td> State/Province/Territory</td>
                                <td> {{ $contact->state }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td> {{ $contact->adress }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td> {{ $contact->country }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td> {{ $contact->city }}</td>
                            </tr>
                            <tr>
                                <td>Company</td>
                                <td> {{ $contact->company }}</td>
                            </tr>
                            <tr>
                                <td> Address 2</td>
                                <td> {{ $contact->adres2 }}</td>
                            </tr>
                            <tr>
                                <td> .US Nexus Categories</td>
                                <td> {{ $contact->nexus }}</td>
                            </tr>
                            <tr>
                                <td> .US Application Purposes</td>
                                <td> {{ $contact->purpose}}</td>
                            </tr>

                            <tr>
                                <td> Default</td>
                                <td> <a href="#" class="">  {{ getstatusdefault($contact->default) }}</a>
                                    @if($contact->default == 'inactive')
                                    <a href="{{route('user.contact.default' , $contact )}}" class=""> انتخاب به عنوان دیفالت</a> @endif
                                </td>
                            </tr>


                            <tr>
                                <td>تاریخ ثبت اکانت</td>
<td>{{ date_frmat($contact->created_at) }}</td>
                            </tr>


{{-- <style>  .fas {  color: red !important; } </style> --}}

                            <tr>
                                <td> Delete</td>
                                <td>

                                    <form class="forms-sample" method="POST" action="{{route('user.contact.destroy' , $contact )}}" >
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
