<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SearchController extends Controller
{
    public function searchArticle(Request $request)
    {
        $search = Article::search($request->search)->get();
        return view('search',['search' => $search]);
    }
}
