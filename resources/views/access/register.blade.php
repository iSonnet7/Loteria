@extends('layouts.template')

@section('title', 'Register')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        @if (isset($new))
            <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $new->name }}">
            </div>
        @else
            <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
        @endif
        
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

        @if (isset($new))
            <div class="mb-1">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $new->email }}">
            </div>
        @else
            <div class="mb-1">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
        @endif

        @if (!isset($new))
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
        @endif
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{route('google.redirect')}}" class="btn btn-secundary">GOOGLE</a>
    <a href="" class="btn btn-secundary">FACEBOOK</a>
</div>
@endsection