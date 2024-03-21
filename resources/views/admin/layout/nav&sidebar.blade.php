 <!-- partial:partials/_navbar.html -->
 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Abhishek Kumar</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="">
                  <i class="mdi mdi-login me-2 text-success"></i> Profile 
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log 
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('user.logout')}}">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('backend/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('backend/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('backend/assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{ route('user.logout') }}">
                <i class="mdi mdi-power"></i>
              </a>
            </li>

            <li class="nav-item nav-logout d-none d-lg-block">
            <div class="mode">
                Dark mode:             
                <span class="change">OFF</span>
            </div>         
           </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Abhishek Kumar</span>
                  <span class="text-secondary text-small">kumarpuplish@gmail.com</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#basic-profile" aria-expanded="false" aria-controls="basic-profile">
                <span class="menu-title">User Profile</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
              <div class="collapse" id="basic-profile">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.profile') }}">Profile Information</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.password') }}">Password Update</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.session') }}">Account Session</a></li>
                </ul>
              </div>
            </li> -->


            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#basic-profile" aria-expanded="false" aria-controls="basic-profile">
                <span class="menu-title">Module Master</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
              <div class="collapse" id="basic-profile">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('modules') }}">Modules</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('roles') }}">Roles</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user.all') }}">User Master</a></li>
                </ul>
              </div>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Inventory MS</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/ui-features/buttons.html') }}">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/ui-features/typography.html') }}">Typography</a></li>
                </ul>
              </div>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/icons/mdi.html') }}">
                <span class="menu-title">Order MS</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/forms/basic_elements.html') }}">
                <span class="menu-title">O.Process and Fullfilment</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/charts/chartjs.html') }}">
                <span class="menu-title">Accounts And Payments</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/tables/basic-table.html') }}">
                <span class="menu-title">Reports and Dashboards</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Customer RM</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/samples/blank-page.html') }}"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/samples/login.html') }}"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/samples/register.html') }}"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/samples/error-404.html') }}"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ asset('backend/pages/samples/error-500.html') }}"> 500 </a></li>
                </ul>
              </div>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/tables/basic-table.html') }}">
                <span class="menu-title">Document Management</span>
                <i class="mdi mdi-book-multiple menu-icon"></i>
              </a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/tables/basic-table.html') }}">
                <span class="menu-title">Work Flow Doc's</span>
                <i class="mdi mdi-chart-line menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('backend/pages/tables/basic-table.html') }}">
                <span class="menu-title">Projects</span>
                <i class="mdi mdi-source-branch menu-icon"></i>
              </a>
            </li> -->
          </ul>
        </nav>
        <!-- partial -->