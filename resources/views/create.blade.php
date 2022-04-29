@extends('layouts.master')

@section('content')
    <h1>Post</h1>
    @include('fragments.validation-errors')
    @include('fragments.sesion')
    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        @include('_form')
    </form>
@endsection