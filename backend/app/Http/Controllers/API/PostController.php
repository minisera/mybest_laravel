<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $posts = Post::all(); 

        $result = [
            'user' => $user,
            'posts' => $posts
        ];

        return response()->json($result);
    }

}
