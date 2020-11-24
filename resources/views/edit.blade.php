@extends('master')

@section('content')
<div class="container">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Profile</h3>

    </div>
      <form action="{{ route('edit', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @csrf         
            <div class="form-group">
              <label for="exampleInputName">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name}}" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone</label>
              <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value="{{ Auth::user()->phone }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" readonly id="exampleInputEmail1" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <div class="col-md-4">
                  <input type="file" class="form-control" name="avatar" id="product_image" >
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Update Profile</button>
          </form>
    </div>
    <!-- /.card -->
  </div>
        
</div>
</div>
@endsection
