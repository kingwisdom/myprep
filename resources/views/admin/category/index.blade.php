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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php
            $i = 1
         @endphp
        @foreach($category as $cat)
            <tr>
                <td>{{ $i++ }}</td>
                <td class="mycat">{{$cat->name }}</td>
                <td>
                  
                  <form id="display-form" action="{{ route('category.update', $cat->id) }}" method="post">
            
                      @csrf
                      {{ method_field('PUT') }}
                          <div class="form-group">
                            <input placeholder="Name" name="name" id="category" value="{{ $cat->name }}" class="form-control" type="text">
                          </div>
                          <div class="form-group"> 
                          <button type="submit"  class="btn btn-default">Update</button>
                          </div>
                      </form>

                  <form action="{{ route('category.destroy', $cat->id) }}" method="post" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-primary" disabled>Delete</button>
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
        <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
          <i class="fab fa-twitter"></i>
        </a>
        <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
          <i class="fab fa-linkedin"></i>
        </a>
        <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Update modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Edit Category</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('category.update', $cat->id) }}" method="post">
            <!-- <form id="addForm"> -->
            @csrf
            {{ method_field('PUT') }}
                <div class="form-group">
                  <input placeholder="Name" name="name" id="category" value="{{ $cat->name }}" class="form-control" type="text">
                </div>
                <div class="form-group"> 
                <button type="submit"  class="btn btn-default">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>



<!-- add modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
            <!-- <form id="addForm"> -->
            @csrf
                <div class="form-group">
                  <input placeholder="Name" id="mycat" name="name" id="category" class="form-control" type="text">
                </div>
                <div class="form-group"> 
                <button type="submit" id="AddButton" class="btn btn-default">Add</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>




@endsection

@section('script')
<script>
  
  function displayForm(){
    var form = document.getElementById('display-form');
    form.style.display = 'block';
  }

</script>
@endsection