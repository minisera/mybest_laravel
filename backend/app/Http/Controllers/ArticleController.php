<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        session([ 
            "title" => $request->input('title'),
            "text" => $request->input('text'),
            "article_id" => $request->input('article_id'),
            "url" => $request->input('url')
            ]);
        
        $user = Auth::user();
        $articles = $user->articles;
        return view('articles.index')->with([
            'user'  => $user,
            'articles' => $articles
        ]);
    }

    public function create()
    {
        $user = Auth::user();
        return view('articles.create')->with([
            'user'  => $user
        ]);
    }

    public function store(Request $request,Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();

        return redirect()->route('articles.index');
    }
}
