<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class BlogSidebar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categories = \App\Category::all();
        $archive = \App\Article::archive();
        $tags = \App\Tag::all();
        $popular_post = DB::select('SELECT id, title, updated_at FROM articles ORDER BY views DESC LIMIT 3');
        view()->share(['archive' => $archive,'categories' => $categories,'tags' => $tags,'popular_post' => $popular_post]);
        return $next($request);
    }
}
