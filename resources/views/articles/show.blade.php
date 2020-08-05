@extends('layout')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p><a href="/articles/{{ $article->id }}/edit">Update</a></p>
    <p>{{ $article->excerpt }}</p>
    <p>{{ $article->body }}</p>
@endsection