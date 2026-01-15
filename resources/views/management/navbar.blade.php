    <style>
    .bg-glow {
       background-color: #0a0a0a;
        color: white;
        overflow-x: hidden;
    }
  </style>
  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-glow" id="layout-navbar">
      <div class="container-xxl">
          <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                  </span>
                  <span class="app-brand-text demo menu-text fw-bold">Management Email</span>
              </a>
          </div>


          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                  <div class="nav-item dropdown-style-switcher dropdown">
                      <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                          href="javascript:void(0);" data-bs-toggle="dropdown">
                          <i class="ti ti-md"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                          <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                  <span class="align-middle"><i class="ti ti-sun me-3"></i>Light</span>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                  <span class="align-middle"><i class="ti ti-moon-stars me-3"></i>Dark</span>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                  <span class="align-middle"><i
                                          class="ti ti-device-desktop-analytics me-3"></i>System</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                      <ul class="dropdown-menu dropdown-menu-end">
                          <li>

                                  <div class="d-grid px-2 pt-2 pb-1">
                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger d-flex w-100">
                                    <small class="align-middle">Logout</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                </button>
                            </form>
                        </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
