@extends('frontend.layouts.master')

@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
<div class="banner_inner d-flex align-items-center">
<div class="container">
    <div class="banner_content text-center">
        <h2>For more details contact us</h2>
        <div class="page_link">
            <a href="{{ route('public.home') }}">Home</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
<div class="container">
{{-- <div id="mapBox" class="mapBox"
    data-lat="40.701083"
    data-lon="-74.1522848"
    data-zoom="13"
    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
    data-mlat="40.701083"
    data-mlon="-74.1522848">
</div> --}}
<div class="row">
    <div class="col-lg-3">
        <div class="contact_info">
            <div class="info_item">
                <i class="lnr lnr-home"></i>
                <h6> {{ config('draquaculture.address_line1') }} </h6>
                <p> {{ config('draquaculture.address_line2') }} </p>
            </div>
            <div class="info_item">
                {{-- <i class="lnr lnr-phone-handset"></i> --}}
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <h6>
                    <a href="#"> {{ config('draquaculture.contact_phone') }} </a>
                </h6>
                <p>Call or Whatsapp</p>
            </div>
            <div class="info_item">
                <i class="lnr lnr-envelope"></i>
                <h6><a href="#">{{ config('draquaculture.support_email') }}</a></h6>
                <p>Send us your query anytime!</p>
            </div>
        </div>
    </div>

    <div class="col-lg-9">
        <form class="row contact_form" action="https://formspree.io/{{ config('draquaculture.support_email') }}" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<!--================Contact Area =================-->

@endsection

@section('javascript')
    <script type="text/javascript">
		$(document).ready(function(){
            $('form.contact_form').on('submit', function(e) {
    		e.preventDefault();

    		var name = $('#name').val();
    		var email = $('#email').val();
    		var subject = $('#subject').val();
            var message = $('#message').val();

    		$.ajax({
    			url:'https://formspree.io/{{ config('draquaculture.support_email') }}',
    			method:'POST',
    			data:{
    				name: name,
    				email: email,
                    _replyto: email,
    				subject: subject,
    				_subject: subject,
                    message: message
    			},
    			dataType:"json",
    			success:function(data) {
    				console.log('success: ', data);
    				alert('Mail sent successfully. We will contact you shortly.');
                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('#message').val('');
    			}

    		});

    	});

		});
	</script>
@endsection
