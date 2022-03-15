@extends('layouts.template')

@section('title', 'Register')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('fatherLastName')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('motherLastName')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('birthday')
                <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('number')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('email')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('password')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        <div class="mb-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-1">
            <label for="fatherLastName" class="form-label">Father Last Name</label>
            <input type="text" class="form-control" name="fatherLastName">
        </div>
        <div class="mb-1">
            <label for="motherLastName" class="form-label">Mother Last Name</label>
            <input type="text" class="form-control" name="motherLastName">
        </div>
        <div class="mb-1">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" name="birthday">
        </div>
        <div class="mb-1">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control" name="number">
        </div>
        <div class="mb-1">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{route('google.redirect')}}" class="btn btn-secundary">GOOGLE</a>
</div>
@endsection