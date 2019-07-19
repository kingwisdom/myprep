@extends('front.app')

@section('style')
    <style>
        .shape{
            width: 150px;
            height: 230px;
        }
    </style>
@endsection

@section('content')

<section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>We Ensure better education <br />for a better Nigeria</h3>
						<p>Get personal tutor for any area of education, we are the best in what we do</p>
						<a class="main_btn" data-toggle="modal" data-target="#tutorModal">Become a Tutor</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Finance Area =================-->
        <section class="finance_area">
        	<div class="container">
        		<div class="finance_inner row">

                @foreach($category as $cat)
        			<div class="col-lg-3 col-sm-6">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-rocket"></i>
        						</div>
        						<div class="media-body">
        							<h5>{{$cat->name}}</h5>
        						</div>
        					</div>
        				</div>
        			</div>
                @endforeach


                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

        		</div>
        	</div>
        </section>
        <!--================End Finance Area =================-->
        
        <!--================Courses Area =================-->
        <section class="team_area" style="margin-bottom:30px;">
        	<div class="container">
        		<div class="main_title">
        			<h2>Meet Our Tutors</h2>
        			<p>We give you the best</p>
        		</div>
        		<div class="row team_inner">
                @foreach($tutors as $tut)
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
                                @if($tut->image)
        						<img class="rounded-circle shape" src="{{ URL::to('/') }}/images/{{ $tut->image}}" alt=""> 
                                @else
        						<img class="rounded-circle shape" src="{{ asset('images/image.jpg') }}" alt=""> 
                                @endif
        						<!-- <div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div> -->
        					</div>
        					<div class="team_name">
        						<a href="{{route('tut.show',$tut->id)}}"><h4>{{$tut->surname}} {{$tut->firstname}}</h4></a>
        						<p>{{$tut->category->name}} ({{$tut->courses}})</p>
                                <p>{{$tut->city}} | {{$tut->state}}</p>
        					</div>
        				</div>
        			</div>
                @endforeach

        		</div>
        	</div>
        </section>
        <!--================End Courses Area =================-->        
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2>Become an Tutor</h2>
					<p>Are you a genius in a particular course? it is free apply now!</p>
					<a class="genric-btn success radius" id="addTutor" data-toggle="modal" data-target="#tutorModal">Apply Now!</a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        

    <!-- become a tutor -->


<!-- Modal -->
<div class="modal fade" id="tutorModal" tabindex="-1" role="dialog" aria-labelledby="tutorModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tutorModalTitle">Become A Tutor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
        <div class="modal-body">
        <form action="{{ route('tutor.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

        <div class="col-md-6">
            <div class="mt-10">
                <input name="surname" id="surname" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
                <input name="firstname" id="firstname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input" type="text">
            </div>
            
            <div class="input-group-icon mt-10">
                <div class="form-select" id="default-select2">
                    <select style="display: none;" id="category"  name="category_id">
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>				
                    @endforeach	
                    </select>
                </div>
            </div>
            <div class="mt-10">
                <input name="email" id="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
                <input name="password" id="password" placeholder="Enter Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input" type="password">
            </div>
            
        </div>

        <div class="col-md-6">
            <div class="mt-10">
                <input name="courses" id="course" placeholder="Enter The Course You Want To Teach" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
                <input name="phone" id="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
                <input name="city" id="city" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
			    <input name="state" id="state" placeholder="State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'State'" required="" class="single-input" type="text">
            </div>
            <div class="mt-10">
			    <input name="image" id="image" class="single-input" type="file">
		    </div>
        </div>
        
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="" class="genric-btn success-border circle">Save changes</button>
      
        </form>
      </div>
        </p>
      </div>
      <div class="modal-footer">
       </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script>
   
</script>
@endsection