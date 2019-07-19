<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('frontend/img/favicon.png') }}" type="image/png">
        <title>Myprepcentre |Education</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/popup/magnific-popup.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

        @yield('style')
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
							<li><a href="http://facebook.com/myprepcentre"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/myprepcentre"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://instagram.com/myprepcentre"><i class="fa fa-instagram"></i></a></li>
							<li><a href="myprepcentre@gmail.com"><i class="fa fa-gmail"></i></a></li>
						</ul>
					</div>
					<div class="float-right">
						<a class="dn_btn" href="tel:+2348037097936">+234 803 709 7936</a>
						<a class="dn_btn" href="mailto:info@myprepcentre.com">info@myprepcentre.com</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Courses</a>
									</ul>
								</li> 
								
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="{{ route('coming.soon')}}">All News</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        <!-- YIELD CONTENT -->

		@yield('content')
        <!--================Home Banner Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4  col-md-12 col-sm-12">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">More</h6>
                            <ul class="list">
                            	<li><a href="{{ route('coming.soon')}}">Jobs</a></li>
                            	<li><a href="#">Mprep</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-12 col-sm-12">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Resources</h6>
                            <ul class="list">
                            	<li><a href="{{ route('about')}}">About</a></li>
                            	<li><a href="{{ route('coming.soon')}}">Research</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3 class="footer_title">Subscribe</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MYPREPCENTRE NG
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="http://facebook.com/myprepcentre"><i class="fa fa-facebook"></i></a>
                        <a href="http://twitter.com/myprepcentre"><i class="fa fa-twitter"></i></a>
                        <a href="http://instagram.com/myprepcentre"><i class="fa fa-instagram"></i></a>
                        <a href="mailto:myprepcentre@gmail.com"><i class="fa fa-gmail"></i></a>
                
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/stellar.js') }}"></script>
        <script src="{{ asset('frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ asset('frontend/js/mail-script.js') }}"></script>
        <script src="{{ asset('frontend/js/theme.js') }}"></script>
        @yield('script')
    </body>
</html>