@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="404-content">
      <h1 class="text-center">OOOPS</h1>
      <h2 class="text-center">404 PAGE NOT FOUND</h2>
      <div class="text-center">

        The page you are looking for might have been removed, had its<br> name changed or is temporarily unavailable
        <br><br>
        <a href="{{ home_url('/') }}" class="btn btn-danger">GO TO HOMEPAGE</a>
      </div>
    </div>
  </div>
@endsection
