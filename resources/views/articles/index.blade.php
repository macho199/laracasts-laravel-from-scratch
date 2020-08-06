@extends('layout')

@section('content')
    <h1>Articles Page</h1>
    <ul>
        @foreach ($articles as $article)
        <li>
            
            <a href="{{ $article->path() }}">{{ $article->title }}</a><br>
            {{ $article->excerpt }}
        </li>
        @endforeach
    </ul>
@endsection