
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MYPREPCENTRE | Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('backend/assets/demo/demo.css')}}" rel="stylesheet" />
  @yield('style')
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
          MYPREPCENTRE
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/" onclick="scrollToDownload()">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Goto Homepage</p>
            </a>
          </li>
          
          
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p>Pages</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="{{route('tutor.index')}}">
                <i class="now-ui-icons business_chart-pie-36"></i> Tutors
              </a>
              <a class="dropdown-item" href="{{route('category.index')}}">
                <i class="now-ui-icons business_chart-pie-36"></i> Categories
              </a>
              <a class="dropdown-item" href="{{route('learner.index')}}">
                <i class="now-ui-icons business_chart-pie-36"></i> Learners
              </a>
              <a class="dropdown-item" href="{{route('admin.contact')}}">
                <i class="now-ui-icons business_chart-pie-36"></i> Contact Messages
              </a>
              <a class="dropdown-item" href="/">
                <i class="now-ui-icons business_chart-pie-36"></i> All components
              </a>
              
            </div>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.logout')}}" onclick="scrollToDownload();event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="now-ui-icons user"></i>
              <p>Logout</p>
            </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                   @csrf
                </form>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    
    @yield('content')
    
      <footer class="footer" data-background-color="black">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.myprepng.com" target="_blank">MYPREPCENTRE</a>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('backend/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{asset('backend/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{asset('backend/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('backend/assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('backend/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('backend/assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('backend/assets/js/now-ui-kit.js?v=1.2.0') }}" type="text/javascript"></script>
  @yield('script')
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>
    