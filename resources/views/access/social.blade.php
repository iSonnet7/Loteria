@extends('layouts.template')

@section('title', 'Register Social')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="{{echo $name}}">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{route('google.redirect')}}" class="btn btn-secundary">GOOGLE</a>
</div>
@endsection