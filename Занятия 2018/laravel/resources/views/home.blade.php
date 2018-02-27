@extends('template')

@section("content")

Main Content

@foreach ($users as $user)
	{{$user->login}}
@endforeach

@endsection

@section("table")
Table
@endsection