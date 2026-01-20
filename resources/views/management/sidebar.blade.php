 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
       <div class="app-brand demo">
           <a href="index.html" class="app-brand-link">
               <span class="app-brand-logo demo">
                   <img src="{{ asset('assets/image/miniseri.png') }}" class="w-75 h-auto rounded">
               </span>
               <span class="app-brand-text demo menu-text fw-bold">Miniseri</span>
           </a>

           <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
               <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
               <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
           </a>
       </div>

       <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('index', 'pendaftaran', 'inputSinea*') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div>Menu</div>
        </a>

        <ul class="menu-sub">

            <li class="menu-item {{ request()->routeIs('index') ? 'active' : '' }}">
                <a href="{{ route('index') }}" class="menu-link">
                    <div>Dashboard</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('pendaftaran') ? 'active' : '' }}">
               <a href="{{ route('pendaftaran') }}" class="menu-link">
                    <div>Data Pendaftaran</div>
                </a>
            </li>

            <li class="menu-item {{ request()->routeIs('inputSinea*') ? 'active' : '' }}">
                <a href="{{ route('inputSinea') }}" class="menu-link">
                    <div>Input Sineas</div>
                </a>
            </li>

        </ul>
    </li>
</ul>



   </aside>
