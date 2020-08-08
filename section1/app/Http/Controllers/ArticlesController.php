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
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        $article = new Article($this->articlesValidate());
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));
        
        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'tags' => Tag::all()
        ]);
    }

    public function update(Article $article)
    {
        $articleValidated = $this->articlesValidate();
        $article->update($articleValidated);
        
        $article->tags()->detach();
        $article->tags()->attach($articleValidated["tags"]);

        return redirect(route('articles.show', $article));
    }

    public function destroy()
    {

    }

    public function articlesValidate()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
