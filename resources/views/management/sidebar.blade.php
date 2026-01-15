  <style>
    .bg-glow {
       background-color: #0a0a0a;
        color: white;
        overflow-x: hidden;
    }
  </style>
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-glow">
          <div class="app-brand demo">
           <a href="index.html" class="app-brand-link">
                  <span class="app-brand-logo demo">
              <span class="app-brand-logo demo">
                   <a class="navbar-brand d-flex align-items-center gap-2 text-white" href="#">
            <img src="{{ asset('assets/image/miniseri.png') }}" alt="Logo" height="40">
            <span class="fs-4">MINISERI</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Page -->
            <li class="menu-item {{ request()->routeIs('index') ? 'active' : '' }}">
              <a href="{{ route('index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Page 1">Emails</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Page 2">None</div>
              </a>
            </li>
          </ul>
</aside>
