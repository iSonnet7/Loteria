@extends('layouts.template')

@section('title', 'Login')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            @error('email')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('password')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <label for="remember" class="form-check-label">Check me out</label>
                <input type="checkbox" class="form-check-input" name="remember">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="{{route('google.redirect')}}" class="btn btn-secundary">GOOGLE</a>
    </div>
@endsection