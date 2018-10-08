<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    // Relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    // Filters

    /**
     * @param null $query = month
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|int
     */
    public static function archiveFilter($query = null)
    {
        if ($query){
            $month = \Carbon\Carbon::parse($query)->month;
            $year = \Carbon\Carbon::parse($query)->year;
            //dd($month);
            return Article::with('user','category')->withCount('comments')->whereMonth('updated_at', $month)->whereYear('updated_at', $year)->get();
        }else {
            return 0;
        }

    }

    /**
     * @param null $tag
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|int
     */
    public static function tagFilter($tag = null)
    {
        if ($tag){
            return Article::with('user','category')->withCount('comments')->whereHas('tags', function ($query) use ($tag) {
                $query->where('name', '=', $tag);
            })->paginate(5);
        }else {
            return 0;
        }

    }
    /**
     * @param null $category
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|int
     */
    public static function categoryFilter($category = null)
    {
        if ($category){
            return Article::with('user','category')->withCount('comments')->whereHas('category', function ($query) use ($category) {
                $query->where('name', '=', $category);
            })->paginate(5);
        }else {
            return 0;
        }

    }
    // Archive
    public static function archive()
    {
        $archive = DB::select('SELECT concat(year(updated_at),\'-\',month(updated_at)) as totalDate, count(*) as totalCount FROM `articles` GROUP BY totalDate');
        return $archive;
    }

    public static function viewsCount($id)
{
    $addr = $_SERVER['REMOTE_ADDR'];
    $ip = DB::table('ip_adress')->where('ip_adress','=', $addr)->where('article_id','=', $id)->count();
    if ($ip == 0) {
        DB::table('ip_adress')->insert([
            'ip_adress' => $addr,
            'article_id' => $id
        ]);
        DB::table('articles')->where('id','=', $id)->increment('views');
    }
}
}
