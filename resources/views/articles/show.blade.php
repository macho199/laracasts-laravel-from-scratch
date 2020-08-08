@extends('layout')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p><a href="/articles/{{ $article->id }}/edit">Update</a></p>
    <p>{{ $article->excerpt }}</p>
    <p>{{ $article->body }}</p>
    <p>
        @foreach($article->tags as $tag)
            <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
        @endforeach
    </p>
@endsection