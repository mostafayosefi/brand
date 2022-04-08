@component('index.layouts.content', [
    'title' => 'مشاهده پروفایل من ',
    'tabTitle' => 'مشاهده پروفایل من ',
    'breadcrumb' => [['title' => 'مشاهده پروفایل من ', 'class' => 'active']],
    ])



@include('index.layouts.navbar_body', [  'name_nav' => 'profile'   ])

    <div id="main-content-row" class="content-row default-style main-content-row fullwidth no-sidebar">
        <div class="content-row-wrapper row default">

            <main class="col col-lg-12 col-12 content fullwidth">
                <div class="column-inner">
                    <div
                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-60">

                        <h1 style="text-align: center;"> پروفایل من </h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        <a href="{{route('user.profile.edit')}}">
                                            ویرایش پروفایل <i aria-hidden="true" class="fas fa-edit"></i> </a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>نام و نام خانوادگی</td>
                                    <td> {{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>تلفن</td>
                                    <td> {{ $user->tell }}</td>
                                </tr>
                                <tr>
                                    <td>ایمیل</td>
                                    <td> {{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>نام کاربری</td>
                                    <td> {{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <td>آدرس پستی</td>
                                    <td> {{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <td>تصویر پروفایل</td>

                                    <td>
    @include('index.layouts.elementor.avatar', [  'avatarimage' => $user->image  ])
                                    </td>
                                </tr>
                                <tr>
                                    <td>تاریخ ثبت نام</td>
 <td>{{ date_frmat($user->created_at) }}</td>
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
