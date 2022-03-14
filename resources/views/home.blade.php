@extends('layouts.template')

@section('title', 'Loteria Nacional')

@section('content')
    <div class="container w-25 border p-4 mt-4">
    @if (auth()->check())
        <h1>{{auth()->user()->name}}</h1>
    @else
        <h1>Welcome</h1>
    @endif
    </div>
@endsection