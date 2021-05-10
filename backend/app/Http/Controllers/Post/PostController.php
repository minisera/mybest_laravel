<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $users = User::all();
        return view('posts.index')->with(['users' => $users]);
    }

    public function store(Request $request,Post $post)
    {
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();

        return redirect()->route('posts.index');
    }
}
