@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post['slug'] }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
