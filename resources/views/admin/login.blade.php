<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
  MYPREPCENTRE | Login
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
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip">
          MYPRECENTRE
        </a>
        
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Back to Home</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" action="{{route('admin.login') }}" method="POST">
            @csrf
              <div class="card-header text-center">
                
                  <h3>PLEASE LOGIN</h3>
                
              </div>

              @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif

              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>

       
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Password" class="form-control" name="password" />
                </div>
              </div>

              <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                <div class="pull-left">
               
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link">Need Help?</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="/">
                Myprepcentre
              </a>
            </li>
            <li>
              <a href="/about">
                About Us
              </a>
            </li>
            <li>
              <a href="#">
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
          <a href="/" target="_blank">MYPRECENTRE</a>
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
  
  </body>

</html>