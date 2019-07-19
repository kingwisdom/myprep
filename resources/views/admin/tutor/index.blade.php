@extends('admin.main')

@section('content')

@section('style')
    <style>
        .shape{
            width: 150px;
            height: 180px;
        }
    </style>
@endsection

<div class="section" id="#download-section" data-background-color="black">
  <div class="container">
  <br><br><br>
    <div class="">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="wrapper">
        <h2 class="title text-center">Meet The Recent Tutors <span class="pull-right"><a href="{{ route('tutor.create')}}" class="btn btn-primary">
                Add Tutor
              </a></span></h2>
        <br><br>
        <div class="">
          <div class="row">
          @foreach($tutors as $tutor)
            <div class="col-md-4" style="margin-bottom:30px;">
              <div class="">
              @if($tutor->image)
                <img src="{{ URL::to('/') }}/images/{{ $tutor->image}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised shape">
              @else
              <img src="{{ asset('images/image.jpg') }}" class="rounded-circle img-fluid img-raised shape" alt=""> 
              @endif
                <h4 class="">{{$tutor->surname}} {{$tutor->firstname}}</h4>
                <p class="category text-primary">{{ $tutor->category->name}} - {{$tutor->courses}}</p>
                <p class="description">
                   <b> Contact:</b> {{ $tutor->email}} | {{ $tutor->phone}} <br>
                    {{ $tutor->city}} | {{ $tutor->state}}
                </p>
                <span class="text-center">
                  @if($tutor->is_active == 1)
                    <button class="btn btn-success">Active</button>
                  @else
                  <button class="btn">Not Active</button>
                  @endif
                </span>
                @if($tutor->is_active == 1)
                  <a href="{{URL::to('/inactive/'.$tutor->id)}}" class="btn btn-primary">Disable</a>
                @else
                <a href="{{URL::to('/active/'.$tutor->id)}}" class="btn btn-primary">Enable</a>
                @endif
                                
                
                <a data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">Delete</a>
                                
              </div>
            </div>
        @endforeach
          </div>


          <!-- <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                Launch Modal Mini
          </button> -->

          <div class="modal fade modal-mini modal-primary" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header justify-content-center">
              
                </div>
                <div class="modal-body">
                  <h2 class="text-center">Are You Sure?</h2>
                  <form action="{{ route('tutor.destroy', $tutor->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
        </div>

          {{ $tutors->links() }}
        </div>
      </div>
    

    
  </div>

</div>



@endsection