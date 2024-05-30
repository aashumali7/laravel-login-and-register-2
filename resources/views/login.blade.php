@extends('layouts.app')

@section('main')
         <a href='/register'>Go to the register page </a>
         <h1 class="text-center">Login form </h1>
         @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>
                    <ul style="list-style:none">
                        @foreach( $errors->all() as $error)
                                <li>{{  $error  }}</li>
                        @endforeach
                    </ul>
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         <form method="POST" action="/login">
            @csrf
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection()         