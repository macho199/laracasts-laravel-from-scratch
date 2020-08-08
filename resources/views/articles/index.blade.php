@extends('layout')

@section('content')
    <h1>Articles Page</h1>
    <ul>
        @forelse ($articles as $article)
        <li>
            <a href="{{ $article->path() }}">{{ $article->title }}</a><br>
            {{ $article->excerpt }}
        </li>
        @empty
        <li>empty list</li>
        @endforelse
    </ul>
@endsection