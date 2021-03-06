

      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i data-feather="search"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="جستجو ...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="flag-icon flag-icon-ir mt-1" title="فارسی"></i> <span
                  class="font-weight-medium ml-1 mr-1">فارسی</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-ir" title="us"
                    id="ir"></i> <span class="ml-1"> فارسی </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-tr" title="fr"
                    id="tr"></i> <span class="ml-1"> ترکی استانبولی </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de"
                    id="de"></i> <span class="ml-1"> آلمانی </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="pt"
                    id="us"></i> <span class="ml-1"> انگلیسی </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es"
                    id="es"></i> <span class="ml-1"> اسپانیایی </span></a>
              </div>
            </li>
            <li class="nav-item dropdown nav-apps">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">برنامه ها</p>
                  <a href="javascript:;" class="text-muted">ویرایش</a>
                </div>
                <div class="dropdown-body">
                  <div class="d-flex align-items-center apps">
                    <a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i>
                      <p>گفتگو</p>
                    </a>
                    <a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i>
                      <p>تقویم</p>
                    </a>
                    <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i>
                      <p>ایمیل</p>
                    </a>
                    <a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i>
                      <p>پروفایل</p>
                    </a>
                  </div>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">مشاهده همه</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown nav-messages">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="messageDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">9 پیغام جدید</p>
                  <a href="javascript:;" class="text-muted">پاک کردن همه</a>
                </div>
                <div class="dropdown-body">
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="{{ asset('template/assets/images/face3.jpg') }}" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>رضا افشار</p>
                        <p class="sub-text text-muted">2 دقیقه قبل</p>
                      </div>
                      <p class="sub-text text-muted">وضعیت پروژه</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="{{ asset('template/assets/images/face2.jpg') }}"  alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>پریسا توکلی</p>
                        <p class="sub-text text-muted">30 دقیقه قبل</p>
                      </div>
                      <p class="sub-text text-muted">جلسه</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="{{ asset('template/assets/images/face4.jpg') }}"  alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>پدرام شریفی</p>
                        <p class="sub-text text-muted">1 ساعت قبل</p>
                      </div>
                      <p class="sub-text text-muted">به روز رسانی پروژه</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="{{ asset('template/assets/images/face5.jpg') }}" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>آرزو محبی</p>
                        <p class="sub-text text-muted">2 ساعت قبل</p>
                      </div>
                      <p class="sub-text text-muted">پایان پروژه</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="figure">
                      <img src="{{ asset('template/assets/images/face6.jpg') }}"  alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p>نرگس علیپور</p>
                        <p class="sub-text text-muted">5 ساعت قبل</p>
                      </div>
                      <p class="sub-text text-muted">رکورد جدید</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">مشاهده همه</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown nav-notifications">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">6 اعلان جدید</p>
                  <a href="javascript:;" class="text-muted">پاک کردن همه</a>
                </div>
                <div class="dropdown-body">
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="user-plus"></i>
                    </div>
                    <div class="content">
                      <p>کاربر جدید ثبت نام کرد</p>
                      <p class="sub-text text-muted">2 ثانیه قبل</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="gift"></i>
                    </div>
                    <div class="content">
                      <p>سفارش جدید دریافت شد</p>
                      <p class="sub-text text-muted">30 دقیقه قبل</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="alert-circle"></i>
                    </div>
                    <div class="content">
                      <p>محدودیت سرور!</p>
                      <p class="sub-text text-muted">1 ساعت قبل</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="layers"></i>
                    </div>
                    <div class="content">
                      <p>برنامه ها نیاز به به روز رسانی دارند</p>
                      <p class="sub-text text-muted">5 ساعت قبل</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="download"></i>
                    </div>
                    <div class="content">
                      <p>دانلود تکمیل شد</p>
                      <p class="sub-text text-muted">6 ساعت قبل</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">مشاهده همه</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown nav-profile">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @include('admin.layouts.table.avatar', [ 'avatarimage' => auth()->guard('user')->user()->image , 'class'=>'' , 'style' => ''  ])
            </a>
              <div class="dropdown-menu" aria-labelledby="profileDropdown">
                <div class="dropdown-header d-flex flex-column align-items-center">
                  <div class="figure mb-3">
  
                    @include('admin.layouts.table.avatar', [ 'avatarimage' => auth()->guard('user')->user()->image , 'class'=>'profile-pic' , 'style' => 'height: 100px;width: 100px;'  ])

                  </div>

                   @if (auth()->guard('user')->user())
                  <div class="info text-center">
                    <p class="name font-weight-bold mb-0"> {{auth()->guard('user')->user()->name}} </p>
                    <p class="email text-muted mb-3">{{auth()->guard('user')->user()->email}} </p>
                  </div>
                  @endif



                </div>
                <div class="dropdown-body">
                  <ul class="profile-nav p-0 pt-3">
                    <li class="nav-item">
                      <a href="{{ route('user.profile.edit') }}" class="nav-link">
                        <i data-feather="user"></i>
                        <span>پروفایل</span>
                      </a>
                    </li>
                 
                     
                    <li class="nav-item">
                      <a href="{{ route('index.user.logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="nav-link">
                        <i data-feather="log-out"></i>
                        <span>خروج</span>
                      </a>
                    </li>

                    <form id="logout-form" action="{{ route('index.user.logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>



                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
