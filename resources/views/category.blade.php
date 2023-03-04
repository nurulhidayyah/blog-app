@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Post Categories : {{ $title }}</h1>

    @foreach ($posts as $post)
        <a href="/posts/{{ $post->slug }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection
