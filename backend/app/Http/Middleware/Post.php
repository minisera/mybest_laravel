<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Post
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd($request);
        if ($request->session()->get('url') == url()->current()) {
            return $next($request);
        }

        redirect()->route('posts.create');
    }
}
