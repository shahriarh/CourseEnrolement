@extends('master')

@section('content')
<div class="container">
<div class="card card-sucess">
    <div class="card-header">
    <h3 class="card-title">Create Course</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('course.create')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price ($)</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
        </div>
      
        
       
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</div>



@endsection