@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Halaman Blog Post</h1>
    @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-3">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>By : <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
