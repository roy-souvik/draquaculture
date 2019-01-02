@extends('frontend.layouts.master')

@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Product Packages</h2>
                    <div class="page_link">
                        <a href="{{ route('public.home') }}">Home</a>
                        <a href="#">Product Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    <section class="tracking_box_area p_120">
        <div class="container">
            @include('frontend.pages.packages.list')
        </div>
    </section>


@endsection
