@extends('layouts.global')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <h1>welcome,{{ Auth::user()->username }}</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary" style="cursor:pointer">Sign Out</button>
        </form>
    </div>
@endsection
