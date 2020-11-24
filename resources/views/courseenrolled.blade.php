@extends('master')

@section('content')
<div class="container">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Enrolled Course</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
           

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              
              <th>#</th>
              
              <th>Name</th>
            
              <th>Action</th>
           
            </tr>
          </thead>
          <tbody>
          <!-- @if(isset($courses))
          @foreach($courses as $course) -->
            <tr>
              <td>#</td>
              <td>{{ $courses->users }}</td>
           
              <td>
              <a href="{{ route('enroll', $course->id) }}" class="btn btn-success">Enroll</a>

              </td>
              
           
            </tr>
            <!-- @endforeach  
            @endif -->
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
        
</div>
</div>
@endsection
