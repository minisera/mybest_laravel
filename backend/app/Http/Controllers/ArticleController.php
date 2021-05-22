<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('articles.index')->with([
            'user'  => $user
        ]);
    }

    public function create()
    {
        $user = Auth::user();
        $articles = null;
        return view('articles.create')->with([
            'user'  => $user,
            'articles' => $articles
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
