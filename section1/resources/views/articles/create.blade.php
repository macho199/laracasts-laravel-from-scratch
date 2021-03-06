@extends('layout')

@section('content')
    <div id="wrapper">
        <h1>New Article</h1>
        
        <form action="/articles" method="POST">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ old('title') }}">
                    @error('title')
                    <p>{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="input" type="text" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p>{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="input" type="text" name="body" id="body">{{ old('body') }}</textarea>
                    @error('body')
                    <p>{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="tags">Tags</label>

                <div class="control">
                    <select name="tags[]" multiple>
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection