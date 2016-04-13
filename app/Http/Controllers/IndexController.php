<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Article;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * Index controller ,
     * Show all Articles
     * @return [type] [description]
     */
    public function index() {
        $articles = Article::where('published_at', '<=', Carbon::now())
                            ->orderBy('published_at', 'desc')
                            ->paginate(config('game.articles_per_page'));
        return view('index.index', compact('articles'));
    }

}
