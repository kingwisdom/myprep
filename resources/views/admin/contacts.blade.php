@extends('admin.main')

@section('content')


<div class="section" id="#download-section" data-background-color="black">
  <div class="container">
  <br><br><br>
   
    <div class="text-center col-md-12 col-lg-8">


              
              <a href="/" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
                Go to Homepage
              </a>
            </div>

            
    <br>
    <p>&nbsp;</p>
    <table class="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        @php
            $i = 1
         @endphp
        @foreach($contacts as $cat)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$cat->email }}</td>
                <td>{{$cat->phone }}</td>
                <td>{{$cat->message }}</td>
                <td>{{$cat->created_at->diffForHumans() }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>

    <br>
    <br>
    <div class="row justify-content-md-center sharing-area text-center">
      <div class="text-center col-md-12 col-lg-8">
        <h3>Connect us</h3>
      </div>
      <div class="text-center col-md-12 col-lg-8">
        <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
          <i class="fab fa-twitter"></i>
        </a>
        <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
          <i class="fab fa-linkedin"></i>
        </a>
        <a target="_blank" href="#" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection