@extends('frontend.layouts.master')

@section('content')

    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="{{ route('public.home') }}">Home</a>
                        <a href="#">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <section class="tracking_box_area p_120">
        <div class="container">
            <div class="tracking_box_inner1 text-center">

                <p style="font-size: 22px;">
                    We provide solution for aquaculture for sustainable growth and empowerment of our farmer brothers.
                    <br>
                    For this we need new technological solutions to make the fish farmers more profitable and productive.
                </p>

            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script type="text/javascript">
		$(document).ready(function(){

		});
	</script>
@endsection
