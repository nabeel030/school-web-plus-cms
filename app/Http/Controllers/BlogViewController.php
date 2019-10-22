<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\SiteSetting;
use App\Tag;
use App\Category;

class BlogViewController extends Controller
{
      public function posts()
      {
          $sitesetting = SiteSetting::first();
          $posts = Post::orderBy('created_at', 'desc')->get();
          return view('app.blog')->with('posts', $posts)
                                  ->with('sitesetting', $sitesetting);

      }

      public function singlePost($name,$slug)
      {
          $post = Post::where('slug', $slug)->first();
          $postcategoryId = $post->category_id;
          $categoryId = Category::find($postcategoryId);

          $relatedPosts = $categoryId->posts()->orderBy('created_at', 'desc')->take(3)->get();
          $sitesetting = SiteSetting::first();
          $categories = Category::orderBy('created_at', 'desc')->get();
          $tags = Tag::orderBy('created_at', 'desc')->get();
          return view('app.singlepost')->with('post', $post)
                                        ->with('sitesetting', $sitesetting)
                                          ->with('blogTags', $tags)
                                            ->with('name', $name)
                                              ->with('relatedposts', $relatedPosts)
                                                ->with('categories', $categories);
      }

      public function categoryPage($id, $name)
      {
          $sitesetting = SiteSetting::first();
          $category = Category::find($id);
          $posts = $category->posts()->orderBy('created_at', 'desc')->get();

          return view('app.category')->with('sitesetting', $sitesetting)
                                        ->with('posts', $posts)
                                          ->with('name', $category->name);
      }

      public function tagPage($id, $name)
      {
          $sitesetting = SiteSetting::first();
          $tag = Tag::find($id);
          $posts = $tag->posts()->orderBy('created_at', 'desc')->get();

          return view('app.tag')->with('sitesetting', $sitesetting)
                                        ->with('posts', $posts)
                                          ->with('name', $name);
      }
}
