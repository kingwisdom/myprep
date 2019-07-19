@extends('front.app')

@section('content')

<!--================Contact Area =================-->
<section class="contact_area p_120">
            <div class="container">
                <!-- <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div> -->
                <div class="row">
                    <div class="col-lg-3">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Akwa Ibom, Nigeria</h6>
                                <p>Ikot Ibiok, Eket</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(+234) 9865 562</a></h6>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">info@myprepcentre.com</a></h6>
                                <p>Send us your message anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">

                    <div class="row justify-content-md-center">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif

                        <form class="row contact_form" action="{{route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf   
                        <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="phone" placeholder="Enter Your Phone Number">
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