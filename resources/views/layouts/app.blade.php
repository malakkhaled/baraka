<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'baraka Dashborad') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
  
 

</head>
<body>
    <div id="app">

    <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image=" img/sidebar-4.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
   
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        logo
        </a></div>
         -->
      <div class="sidebar-wrapper" style="background-image: url('{{asset("img/sidebar-3.jpg")}}') " >
        <ul class="nav">
          <li class="nav-item active  " style="margin-top:100px">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>لوحة تحكم</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('userprofile')}}">
              <i class="material-icons">person</i>
              <p>مستخدم</p>
            </a>
          </li>
          <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p>
                        إدارة المنتجات
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="{{route('productdas.index')}}">
                                <span class="sidebar-normal"> عرض المنتجات </span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('productdas.create')}}">
                                <span class="sidebar-normal"> إضافة منتج  </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples2">
                    <i class="material-icons">content_paste</i>
                    <p>
                        إدارة الأخبار
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples2">
                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="{{route('newsdas.index')}}">
                                <span class="sidebar-normal"> عرض الأخبار </span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('newsdas.create')}}">
                                <span class="sidebar-normal"> إضافة خبر  </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
      
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples3">
                    <i class="material-icons">people_alt</i>
                    <p>
                        إدارة المدونين
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples3">
                    <ul class="nav">
                        <li>
                            <a class="nav-link" href="{{route('home')}}">
                                <span class="sidebar-normal"> عرض بيانات المدونين </span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('home')}}">
                                <span class="sidebar-normal"> إضافة مدون  </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
   
        </ul>
      </div>
    </div>


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
       
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{route('userprofile')}}">الصفحة الشخصية</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">تسجيل الخروج</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div class="content">
        <div class="container-fluid">
        @yield('content')
        </div>
      </div>


  <!-- 
        <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        your footer here -->
        </div>
      </footer>
    </div>
    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/core/popper.min.js') }}" ></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}" ></script>
    <script src="{{ asset('js/material-dashboard.js') }}" ></script>

</body>
</html>
