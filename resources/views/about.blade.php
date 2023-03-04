@extends('layouts.main')

@section('container')
    <h1>Ini Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/profile/{{ $image }}" alt="{{ $name }}" width="200">
@endsection
