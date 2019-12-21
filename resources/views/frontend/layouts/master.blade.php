<!doctype html>
<html lang="en">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131660307-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-131660307-1');
        </script>
        @php
            $themeUrl = url(config('view.frontend_theme'));
        @endphp
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="Keywords" content="Biofloc fish farming in India, Online Biofloc Shopping in India, Biofloc Technology"/>
        <meta name="description" content="biofloc fish farming in India">

        <meta name="robots" content="index, follow" />

        <!--Favicon-->
        <link rel="shortcut icon" href="{{ $themeUrl . '/img/favicon.png' }}" type="image/x-icon">
        <link rel="icon" href="{{ $themeUrl . '/img/favicon.png' }}" type="image/x-icon">

        <title>{{ strtoupper(config('app.name')) }}</title>

        <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/css/bootstrap.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/vendors/linericon/style.css'}}"> --}}
        <link rel="stylesheet" href="{{ $themeUrl . '/css/font-awesome.min.css'}}">
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/vendors/owl-carousel/owl.carousel.min.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/vendors/lightbox/simpleLightbox.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/vendors/animate-css/animate.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/vendors/jquery-ui/jquery-ui.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/css/style.css'}}"> --}}
        {{-- <link rel="stylesheet" href="{{ $themeUrl . '/css/responsive.css'}}"> --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700|Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}" />
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<a href="mailto:{{ config('draquaculture.support_email') }}">
                            {{ config('draquaculture.support_email') }}
                        </a>
						<a href="#">Welcome to {{ strtoupper(config('app.name')) }}</a>
					</div>
					<div class="float-right">
						<ul class="header_social">
							<li>
                                <a href="https://www.facebook.com/DrAquaculture" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UCDPHchar0Snl6kqK_tXu9PA" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>

							{{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
						</ul>
					</div>
           		</div>
           	</div>
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="{{ route('public.home') }}" style="font-size: 28px;">
                          <img src="{{ $themeUrl . '/img/logo.jpg' }}" alt="{{ config('app.name') }} Logo" class="rounded-circle" style="width: 88px;">
                          {{ strtoupper(config('app.name')) }}
                        </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item {{  Route::currentRouteNamed('public.home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('public.home') }}">Home</a>
                                </li>

                                <li class="nav-item {{  Route::currentRouteNamed('public.shop') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('public.shop') }}">Products</a>
                                </li>

                                {{-- <li class="nav-item {{  Route::currentRouteNamed('public.productPackages') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('public.productPackages') }}">Product Packages</a>
                                </li> --}}

                                <li class="nav-item {{  Route::currentRouteNamed('public.aboutUs') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('public.aboutUs') }}">About</a>
                                </li>

								{{-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
                                            <a class="nav-link" href="category.html">Shop Category</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="single-product.html">Product Details</a>
                                        </li>
										<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
										<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
										<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
									</ul>
								</li> --}}
								{{-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li>
                                <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
										<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> --}}
								<li class="nav-item {{  Route::currentRouteNamed('public.contactUs') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('public.contactUs') }}">Contact</a>
                                </li>
							</ul>
							{{-- <ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul> --}}
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        @yield('content')

        <!--================ start footer Area  =================-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>
                                We provide solution for aquaculture for sustainable growth and empowerment of our farmer brothers...
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>
                            <div id="mc_embed_signup">
                                 <a href="{{ route('public.contactUs') }}"> Click here to Contact Us </a>
                                {{-- <form target="_blank" action="#" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form> --}}
                            </div>

                            <a class="whatsapp-icon-wrapper" href="http://api.whatsapp.com/send?phone=919330266203&text=Hi, DrAquaculture" target="_blank">
                                <i class="fa fa-whatsapp whatsapp-icon"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-2 offset-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center">
                        Copyright &copy;
                        {{ date('Y') }} All rights reserved | Maintained by
                        <a href="http://cerebroit.com" target="_blank">Cerebroit Services</a>

                    </p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        {{-- <script src="{{ $themeUrl . '/js/jquery-3.2.1.min.js' }}"></script>
        <script src="{{ $themeUrl . '/js/popper.js' }} "></script>
        <script src="{{ $themeUrl . '/js/bootstrap.min.js' }} "></script>
        <script src="{{ $themeUrl . '/js/stellar.js' }} "></script>
        <script src="{{ $themeUrl . '/vendors/lightbox/simpleLightbox.min.js' }} "></script>
        <script src="{{ $themeUrl . '/vendors/owl-carousel/owl.carousel.min.js' }} "></script>
        <script src="{{ $themeUrl . '/vendors/counter-up/jquery.counterup.js' }} "></script>
        <script src="{{ $themeUrl . '/js/theme.js' }} "></script> --}}

        {{-- <script src="{{ asset('js/manifest.js') }}"></script> --}}
        <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>

        @yield('javascript')
    </body>
</html>
