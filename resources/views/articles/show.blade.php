@extends('layout')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->excerpt }}</p>
    <p>{{ $article->body }}</p>
@endsection