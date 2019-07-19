@extends('admin.main')

@section('content')


<div class="section" id="#download-section" data-background-color="black">
  <div class="container">
  <br><br><br>
    <div class="row justify-content-md-center">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="text-center col-md-12 col-lg-8">


              
              <a href="/" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
                Go to Homepage
              </a>
            </div>

            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Category
              </button>
    <br>
    <p>&nbsp;</p>
    <table class="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City | State</th>
                <th>Tutor's Name</th>
                <th>Tutor's Number</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php
            $i = 1
         @endphp
        @foreach($learners as $learner)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$learner->name }}</td>
                <td>{{$learner->phone }}</td>
                <td>{{$learner->address }}</td>
                <td>{{$learner->city }} | {{$learner->state }}</td>
                <td>{{$learner->tutor->surname }} {{$learner->tutor->firstname }}</td>
                <td>{{$learner->tutor->phone }}</td>
                <td>{{$learner->tutor->courses }}</td>
                <td>
                <form action="{{ route('learner.destroy', $learner->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary">Delete</button>
                </form>
                </td>
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
        
      </div>
    </div>
  </div>
</div>

<!-- add modal -->

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Category</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('category.store') }}" method="post">
            @csrf
                <div class="form-group">
                  <input placeholder="Name" name="name" class="form-control" type="text">
                </div>
                <div class="form-group"> 
                <button type="submit" class="btn btn-default">Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
 -->

@endsection