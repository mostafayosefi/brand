<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Noble<span>UI</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">اصلی</li>


        <li class="nav-item {{ isActive(['admin.dashboard']) }}">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">داشبورد</span>
          </a>
        </li>

{{--
        <li class="nav-item  {{ isActive(['admin.dashboard' , 'admin.dashboard'])}} ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ isShow(['admin.dashboard' , 'admin.dashboard'])}}   "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.dashboard') }}" class="nav-link {{ isActive(['admin.dashboard']) }} ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.dashboard') }}" class="nav-link {{ isActive(['admin.dashboard']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li> --}}


          <li class="nav-item  {{ isActive(['admin.user.create' , 'admin.user.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.user.create' , 'admin.user.index'])}}     "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.user.create') }}" class="nav-link   {{ isActive(['admin.user.create']) }}  ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.user.index') }}" class="nav-link   {{ isActive(['admin.user.index']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.faq.create' , 'admin.faq.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#faq" role="button" aria-expanded="false" aria-controls="faq">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سوالات متداول</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.faq.create' , 'admin.faq.index'])}}   "  id="faq">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.faq.create') }}" class="nav-link   {{ isActive(['admin.faq.create']) }}  ">ایجاد سوال</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.faq.index') }}" class="nav-link   {{ isActive(['admin.faq.index']) }}  ">مشاهده سوالات متداول</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.page.create' , 'admin.page.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#page" role="button" aria-expanded="false" aria-controls="page">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">صفحات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.page.create' , 'admin.page.index'])}}   "  id="page">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.page.create') }}" class="nav-link   {{ isActive(['admin.page.create']) }}  ">ایجاد صفحه</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.page.index') }}" class="nav-link   {{ isActive(['admin.page.index']) }}  ">مشاهده صفحات سایت</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.setting.logo_management' , 'admin.setting.logo_management'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#setting" role="button" aria-expanded="false" aria-controls="setting">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">تنظیمات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.setting.logo_management' , 'admin.setting.logo_management'])}}   "  id="setting">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.setting.logo_management') }}" class="nav-link   {{ isActive(['admin.setting.logo_management']) }}  ">مدیریت لوگو و هدر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.all_management') }}" class="nav-link   {{ isActive(['admin.setting.all_management']) }}  "> تنظیمات سایت</a>
                </li>

              </ul>
            </div>
          </li>






      </ul>
    </div>
  </nav>
{{--

  <nav class="settings-sidebar">
    <div class="sidebar-body">
      <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
      </a>
      <h6 class="text-muted">سایدبار : </h6>
      <div class="form-group border-bottom">
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
              value="sidebar-light">
            روشن
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
              value="sidebar-dark" checked>
            تیره
          </label>
        </div>
      </div>
      <div class="theme-wrapper">
        <h6 class="text-muted mb-2">تم روشن : </h6>
        <a class="theme-item active" href="../demo_1/dashboard-one.html">
          <img src="../assets/images/screenshots/light.jpg" alt="light theme">
        </a>
        <h6 class="text-muted mb-2">تم تیره : </h6>
        <a class="theme-item" href="../demo_2/dashboard-one.html">
          <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
        </a>
      </div>
    </div>
  </nav>
 --}}
