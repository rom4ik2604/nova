<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::with('user','category')->withCount('comments')->paginate(5);
        $query = $request->query();
        if(array_key_exists('tag', $query)) {
            $tag = $request->query('tag');
            $articles = Article::tagFilter($tag);
            return view('articles',['articles' => $articles,'tag' => $tag]);
        } elseif (array_key_exists('category', $query)) {
            $category = $request->query('category');
            $articles = Article::categoryFilter($category);
            return view('articles',['articles' => $articles,'category' => $category]);
        } elseif (array_key_exists('archive', $query)) {
            $date = $request->query('archive');
            $articles = Article::archiveFilter($date);
            return view('articles',['articles' => $articles,'date' => $date]);
        } else return view('articles',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::with('user','category','comments','tags')->withCount('comments')->find($id);
        Article::viewsCount($id);
        return view('article',['article' => json_decode($article)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
