@extends('layouts.dash')

@section('content')

    <h1 class="text-5xl">Hi {{ auth()->user()->name }}!</h1>

@endsection
