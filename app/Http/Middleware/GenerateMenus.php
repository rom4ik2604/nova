<?php

namespace App\Http\Middleware;

use App\Navigation;
use Closure;

class GenerateMenus
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
        $nav = Navigation::all();
        \Menu::make('Navigation', function($menu) use ($nav)
        {
            foreach ($nav as $item)
            {
                if($item->parrent_id == null) {
                    $menu->add($item->title)->id($item->id)->link->href($item->path);
                } else {
                    if($parrent = $menu->find($item->parrent_id)) {
                        $parrent->add($item->title,$parrent->nickname.$item->path)->id($item->id);
                    }
                }

            }

        });
        return $next($request);
    }
}
