@extends('layouts.main')

@section('container')

    <h2 class="mb-3">{{ $post->title }}</h2>
    <p>By : Nurul Hidayah in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}

    <a href="\posts">Back to Posts</a>

@endsection