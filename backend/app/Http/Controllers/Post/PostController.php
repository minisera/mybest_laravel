<?php

namespace App\Http\Controllers\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $posts = $user->posts;
    
                
        return view('posts.index')->with([
            'posts' => $posts,
            'user'  => $user,
            ]);
    }

    public function store(Request $request,Post $post)
    {
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();

        return redirect()->route('posts.index');
    }
}
