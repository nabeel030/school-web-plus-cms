<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postcount = Post::count();
        $categorycount = Category::count();
        $tagcount = Tag::count();
        return view('admin.home')->with('pcount',$postcount)
                                  ->with('ccount', $categorycount)
                                    ->with('tcount', $tagcount);
    }
}
