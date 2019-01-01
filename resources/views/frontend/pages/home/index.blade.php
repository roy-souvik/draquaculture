@extends('frontend.layouts.master')

@section('content')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="col-lg-5">
                    <h3>Portable Water Tank</h3>
                    <p>PVC tarpaulin tank for fish rearing for both RAS (Recirculating Aquaculture System) and Biofloc.</a>
                </div>
                <div class="col-lg-7">
                    <div class="halemet_img">
                        <img class="img-thumbnail" src="{{ config('view.frontend_theme') . '/img/banner/banner3.jpeg' }}" alt="" style="width: 350px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Feature Product Area =================-->
<section class="feature_product_area">
    <div class="main_box">
        <div class="container">
            {{-- <div class="row hot_product_inner">
                <div class="col-lg-6">
                    <div class="hot_p_item">
                        <img class="img-fluid" src="img/product/hot-product/hot-p-1.jpg" alt="">
                        <div class="product_text">
                            <h4>Hot Deals of <br />this Month</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hot_p_item">
                        <img class="img-fluid" src="img/product/hot-product/hot-p-2.jpg" alt="">
                        <div class="product_text">
                            <h4>Hot Deals of <br />this Month</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="feature_product_inner">
                <div class="main_title">
                    <h2>Suitable for Aquaculture like</h2>
                    {{-- <p>Who are in extremely love with eco friendly system.</p> --}}
                </div>
                <div class="feature_p_slider owl-carousel">

                    @php
                        $fishProducts = config('draquaculture.fish_products');
                    @endphp

                    @foreach ($fishProducts as $product)
                        <div class="item">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid img-thumbnail" src="{{ config('view.frontend_theme') . '/product-images//' . $product['image']}}" alt="{{ $product['name'] }}">
                                    {{-- <div class="p_icon">
                                        <a href="#"><i class="lnr lnr-heart"></i></a>
                                        <a href="#"><i class="lnr lnr-cart"></i></a>
                                    </div> --}}
                                </div>
                                <a href="javascript:void(0);">
                                    <h4>{{ $product['name'] }}</h4>
                                </a>
                                {{-- <h5>$150.00</h5> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Product Area =================-->

<!--================Deal Timer Area =================-->
{{-- <section class="timer_area">
    <div class="container">
        <div class="main_title">
            <h2>Exclusive Hot Deal Ends Soon!</h2>
            <p>Who are in extremely love with eco friendly system.</p>
            <a class="main_btn" href="#">Shop Now</a>
        </div>
        <div class="timer_inner">
            <div id="timer" class="timer">
                <div class="timer__section days">
                    <div class="timer__number"></div>
                    <div class="timer__label">days</div>
                </div>
                <div class="timer__section hours">
                    <div class="timer__number"></div>
                    <div class="timer__label">hours</div>
                </div>
                <div class="timer__section minutes">
                    <div class="timer__number"></div>
                    <div class="timer__label">Minutes</div>
                </div>
                <div class="timer__section seconds">
                    <div class="timer__number"></div>
                    <div class="timer__label">seconds</div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================End Deal Timer Area =================-->

<!--================Latest Product Area =================-->
<section class="feature_product_area latest_product_area">
    <div class="main_box">
        <div class="container">
            <div class="feature_product_inner">
                <div class="main_title">
                    <h2>Latest Products</h2>
                    {{-- <p>Who are in extremely love with eco friendly system.</p> --}}
                </div>
                <div class="latest_product_inner row">
                    @php
                        $products = config('draquaculture.products');
                    @endphp

                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid img-thumbnail" src="{{ config('view.frontend_theme') . '/product-images//' . $product['image']}}" alt="{{ $product['name'] }}">
                                    <div class="p_icon">
                                        {{-- <a href="#"><i class="lnr lnr-heart"></i></a> --}}
                                        <a href="{{ route('public.contactUs') }}"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </div>
                                <a href="{{ route('public.contactUs') }}">
                                    <h4>{{ $product['name'] }}</h4>
                                </a>
                                {{-- <h5>$150.00</h5> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Latest Product Area =================-->

<!--================Clients Logo Area =================-->
<section class="clients_logo_area">
    <div class="container">
        <div class="main_title">
            <h2>Exclusive Videos!</h2>
            {{-- <p>Who are in extremely love with eco friendly system.</p> --}}
        </div>

        <div class="row">
            <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kAKPGu9Mtbg" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/61_zthTcH04" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        {{-- <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="img/clients-logo/c-logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="img/clients-logo/c-logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="img/clients-logo/c-logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="img/clients-logo/c-logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="img/clients-logo/c-logo-5.png" alt="">
            </div>
        </div> --}}
    </div>
</section>
<!--================End Clients Logo Area =================-->

<!--================Most Product Area =================-->
{{-- <section class="most_product_area">
    <div class="main_box">
        <div class="container">
            <div class="main_title">
                <h2>Most Searched Products</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row most_product_inner">
                <div class="col-lg-3 col-sm-6">
                    <div class="most_p_list">
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="most_p_list">
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="most_p_list">
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-7.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-8.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-9.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="most_p_list">
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-10.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-11.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/product/most-product/m-product-12.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Black lace Heels</h4></a>
                                <h3>$189.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================End Most Product Area =================-->

@endsection

@section('javascript')
    <script type="text/javascript">
		$(document).ready(function(){

		});
	</script>
@endsection
