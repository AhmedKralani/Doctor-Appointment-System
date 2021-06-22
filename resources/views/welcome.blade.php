@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/online-medicine-concept_160901-152.jpg" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Create an account & Book your appointment</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <div class="mt-5">
                @if(Auth::check())
                    <!-- @if(auth()->check() && auth()->user()->role->name === 'patient')
                        <a href="{{url('user-profile')}}"> <button class="btn btn-success">Profile</button></a>
                        <a href="{{ route('my.booking') }}"> <button class="btn btn-success">My Booking</button></a>
                        <a href="{{ route('my.prescription') }}"> <button class="btn btn-success">My Prescriptions</button></a>
                    @endif -->
                @else
                    <a href="{{url('/register')}}"> <button class="btn btn-success">Register as Patient</button></a>
                    <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
                @endif
            </div>
        </div>
    </div>
    <hr>
  <!--date picker component-->
  <find-doctor>
  </find-doctor>
</div>
@endsection
