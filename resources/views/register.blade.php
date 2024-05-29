@extends('layouts.app')

@section('main')
         <a href='/'>Go to the register page </a>
         <h1 class="text-center">Register form </h1>
         <form method="POST" action="{{route('abc')}}">
              @csrf
              <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input name="cpassword" value="" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
@endsection()