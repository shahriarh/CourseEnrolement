@extends('master')

@section('content')
<div class="container">
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <div class="text-center">
        <img class="img-fluid rounded" width="20%" height="20%" src="{{asset(Auth::user()->avatar)}}" alt="">
        </div>

        <h3 class="profile-username text-center">{{  Auth::user()->name }}</h3>

        <p class="text-muted text-center">Software Engineer</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
            <b>Phone: {{ Auth::user()->phone }}</b>
            </li>
            <li class="list-group-item">
            <b>Email: {{ Auth::user()->email }}</b>
            </li>
            <li class="list-group-item">
            <b>Courses Taken: {{ Auth::user()->courses}}</b>
            </li>
        
        </ul>

        <a href="{{ route('edit', Auth::user()->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
        </div>
        <!-- /.card-body -->
    </div>
</div>


@endsection
