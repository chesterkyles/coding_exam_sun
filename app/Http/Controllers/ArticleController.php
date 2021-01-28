<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function store()
    {

        $data = request()->validate([
            'name' => ['required','string'],
            'content' => ['required', 'string'],
        ]);

        Article::create($data);
        return redirect('article');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $data = request()->validate([
            'name' => ['required','string'],
            'content' => ['required', 'string'],
        ]);

        $article->update($data);
        return redirect('article');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('article');
    }

}
