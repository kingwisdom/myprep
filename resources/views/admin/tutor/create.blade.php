@extends('admin.main')

@section('content')


<div class="section" id="#download-section" data-background-color="black">
<div class="container">
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
          <div class="row">
            <div class="card" data-background-color="orange" style="margin-top:200px;">
              <form class="form" method="post" action="{{ route('tutor.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="input-group no-border">
                    
                    <input class="form-control" placeholder="Surname Name..." name="surname" type="text">
                  </div>
                  <div class="input-group no-border">
                    <input placeholder="First Name..." class="form-control" name="firstname" type="text">
                  </div>
                  <div class="input-group no-border">
                    <select class="form-control" name="category_id" style="color:black;">
                        @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="Email..." type="text" name="email">
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="Courses" name="course" type="text">
                    <p>e.g (Mathematics, English, Graphics e.t.c)</p>
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="Phone" name="phone" type="number">
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="State" name="state" type="text">
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" placeholder="City" name="city" type="text">
                  </div>
                  <div class="input-group no-border">
                    <input class="form-control" name="image" type="file">
                  </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-neutral btn-round btn-lg">Add Tutor</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col text-center">
            <a href="{{route('tutor.index')}}" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">View Tutors Page</a>
          </div>
        </div>
</div>


@endsection