<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag', '')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        Article::create($validatedAttributes);

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->update($validatedAttributes);

        return redirect(route('articles.show', $article));
    }

    public function destroy()
    {

    }
}
