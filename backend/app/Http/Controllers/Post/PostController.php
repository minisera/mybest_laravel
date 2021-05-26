<?php

namespace App\Http\Controllers\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $posts = $user->posts; 
        $articles = Article::all();
                
        return view('posts.index')->with([
            'posts' => $posts,
            'user'  => $user,
            'articles' => $articles
            ]);
    }

    public function store(Request $request,Post $post)
    {
        //artclesと紐付けがあればarticle_idをつけたい
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();
        

        return redirect()->route('posts.index');
    }
}
