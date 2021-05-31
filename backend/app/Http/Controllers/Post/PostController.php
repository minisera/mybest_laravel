<?php

namespace App\Http\Controllers\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use App\Models\Post;
use PhpParser\Builder\FunctionLike;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $posts = $user->posts; 
                
        return view('posts.index')->with([
            'posts' => $posts,
            'user'  => $user
        ]);
    }

    public function store(Request $request,Post $post)
    {   
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->article_id = $request->input('article_id');
        $post->save();
        

        return redirect()->route('posts.index');
    }

    public function create()
    {
        $user = Auth::user();
        $articles = $user->articles->pluck('text','id');
        return view('posts.create')->with([
            'user' => $user,
            'articles' => $articles
        ]);
    }
}
