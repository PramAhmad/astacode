<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    {{-- get from assets file in  public --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/images/favicon.ico')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    @vite('resources/css/app.css')
    <style>
      .active {
        background-color: #f3f4f6;
      }
   
        .preview img {
            width: 300px;   
            height: 200px;  
            margin: 10px;
        }
        .image-container {
            display: inline-block;
            position: relative;
        }
      
        
    </style>
    </style>
    @include('sweetalert::alert')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <h3 class="tw-text-gray-800 tw-text-3xl">
            <a href="{{route('frontend.index')}}">
              Asta<span class="tw-text-sky-500">Code</span></a>
          </h3>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
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
                  <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                  <form action="{{url('logout')}}" method="POST">
                  @csrf
                    <button class="dropdown-item" type="submit">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Signout
                    </button>
                  </form> 

              </div>
            </li>
         
            <li>
              {{-- home back --}}
              <a href="{{route('frontend.index')}}" class="tw-py-2 tw-px-5 tw-text-white tw-bg-sky-500 tw-rounded-md hover:tw-bg-sky-400 hover:tw-text-white">
                Back To Home <i class="mdi mdi-home"></i>
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
                  <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                  <span class="text-secondary text-small">{{Auth::user()->getRoleNames()[0]}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}" > Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('jabatan.index')}}">Jabatan</a></li>
                  {{-- criteria --}}
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.criteria.index')}}">Job Criteria</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('service.index')}}">
                <span class="menu-title">Service Company</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{route('tech.index')}}">
                <span class="menu-title">Technology</span>
                <i class="mdi mdi-pulse menu-icon"></i>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{route('project.index')}}">
                <span class="menu-title">Project</span>
                <i class="mdi mdi-cards menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('member.index')}}">
                <span class="menu-title">Member Team</span>
                <i class="mdi mdi-account-multiple-outline menu-icon"></i>
              </a>
            </li> 
            {{-- job and contact --}}
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.jobs.index')}}">
                <span class="menu-title">Job</span>
                <i class="mdi mdi-briefcase menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.contact.index')}}">
                <span class="menu-title
">Contact</span>
                <i class="mdi mdi-email menu-icon"></i>
              </a>

            {{-- signout --}}
            <li class="nav-item">
              <form action="{{url('logout')}}" method="POST">
                @csrf
                <button class="nav-link" type="submit">
                  <span class="menu-title ">Signout</span>
                  <i class="mdi mdi-logout menu-icon"></i>
                </button>
              </form>
            </li>
            
          
          </ul>
        </nav>
        <!-- partial -->
        {{-- yield content --}}
        @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>