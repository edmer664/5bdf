@extends('layouts.auth')
@section('heading', 'Dashboard')
@section('content')
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <img src="{{asset('assets/images/5bdfLogo.png')}}" alt="" class="w-100">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="text-center">
          Welcome to 5BDF Admin Panel!
        </h2>
      </div>
    </div>
  </div>
@endsection