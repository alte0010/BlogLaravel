<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        //render a list of a resource.
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // Show a single resource.

        return view('articles.show', ['article' => $article]);
    }


    public function create()
    {
        //Shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        //Show a view to edit an existing resource
        return view("/articles.edit", compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        //Delete the resource.

    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}
