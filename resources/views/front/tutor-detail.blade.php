@extends('front.app')

@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Course Details</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="courses.html">Course</a>
							<a href="course-details.html">Course Details</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

		@if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
    <!--================Course Details Area =================-->
    <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-8">
        				<div class="c_details_img">
        					<img class="img-fluid" src="{{ URL::to('/') }}/images/{{ $tutors->image}}" alt="" width="400">
        				</div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Objectives</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Get Tutor</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="objctive_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
								</div>
							</div>
							<div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
								
								<div class="comment-form">
                                <div class="col-lg-8 col-md-8">
								<h3 class="mb-30 title_color">SEND MESSAGE</h3>
								<form action="{{route('tutor.details')}}" method="post"> 
								
									@csrf
									<div class="mt-10">
										<input name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input" type="text">
									</div>
									<input name="tutorname" type="text" value="{{$tutors->surname}} {{$tutors->firstname}}" hidden>
									<input name="tutor_id" type="text" value="{{$tutors->id}}" hidden>
									
									<div class="mt-10">
										<input name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input" type="number">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input" type="text">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
										<input name="city" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input" type="text">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
										<input name="state" placeholder="State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input" type="text">
									</div>
									
									
									<div class="mt-10">
										<textarea name="comment" class="single-textarea" placeholder="Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
									</div>
									<div class="form-group">
                                        <button type="submit" class="genric-btn success circle btn-submit">Submit</button>
                                    </div>
								</form>
							</div>
						</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="c_details_list">
        					<ul class="list">
        						<li><a href="#">Tutor’s Name <span>{{$tutors->surname}} {{$tutors->firstname}}</span></a></li>
        						<li><a href="#">Email <span>{{$tutors->email}} </span></a></li>
        						<li><a href="#">State <span>{{$tutors->state}} </span></a></li>
        						<li><a href="#">City <span>{{$tutors->city}} </span></a></li>
        						<li><a href="#">Phone <span>{{$tutors->phone}} </span></a></li>
        						<li><a href="#">Course Fee <span></span></a></li>
        						<li><a href="#">Availablity  <span>Available</span></a></li>
        					</ul>
        					<a class="main_btn" href="#">Enroll the Course</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Course Details Area =================-->
        
        

@endsection

@section('script')
<script>
	// $.ajaxSetup({
	// 	headers:{
	// 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
	// 	}

	// });

	// $(".btn-submit").click(function(e){
	// 	e.preventDefault();
	
	// var name = $("input[name=name]").val();
	// var tutor = $("input[name=tutorname]").val();
	// var tutor_id = $("input[name=tutor_id]").val();
	// var phone = $("input[name=phone]").val();
	// var address = $("input[name=address]").val();
	// var city = $("input[name=city]").val();
	// var state = $("input[name=state]").val();
	// var comment = $("input[name=comment]").val();

	// $.ajax({
	// 	type:'POST',
	// 	url:'{{route("tutor.details")}}',
	// 	data:{
	// 		name:name, tutor:tutor,tutor_id:tutor_id,phone:phone,city:city,state:state, comment:comment
	// 	},
	// 	success: function(data){
	// 		alert(data.success);
	// 	}
	// });
	// });
</script>
@endsection