<?php

namespace App\Http\Controllers;

use App\About;
use App\Brochure;
use App\Course;
use App\Gallery;
use App\Parents;
use App\Service;
use App\Slider;
use App\Teacher;
use App\update;
use Illuminate\Http\Request;
use App\Post;
use App\SiteSetting;
use App\Tag;
use App\Category;
use PhpParser\Builder\Class_;

class BlogViewController extends Controller
{
    public function posts()
    {
        $sitesetting = SiteSetting::first();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('app.blog')->with('posts', $posts)
            ->with('sitesetting', $sitesetting);

    }

    public function singlePost($name, $slug)
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

    public function home_page()
    {
        $sitesetting = SiteSetting::first();
        $about = About::first();
        $service = Service::orderBy('created_at', 'desc')->get();
        $slider = Slider::all();
        $teacher = Teacher::orderBy('created_at', 'desc')->take(4)->get();
        $parents = Parents::orderBy('created_at', 'desc')->get();
        $gallery = Gallery::orderBy('created_at', 'desc')->take(4)->get();
        $courses = Course::all();
        $post = Post::orderBy('created_at', 'desc')->take(3)->get();
        $brochure = Brochure::all();
        $news = update::orderBy('created_at', 'desc')->get();

        return view('app.index',
            [
                'sitesetting' => $sitesetting,
                'about' => $about,
                'services' => $service,
                'slider' => $slider,
                'teachers' => $teacher,
                'parents' => $parents,
                'gallery' => $gallery,
                'courses' => $courses,
                'posts' => $post,
                'brochure' => $brochure,
                'news' => $news,
        ]);
    }

    public function about(){
        $sitesetting = SiteSetting::first();
        $about = About::first();
        $service = Service::orderBy('created_at', 'desc')->get();

        return view('app.about', ['sitesetting' => $sitesetting, 'about' => $about, 'services' =>$service]);
    }

    public function certified_teachers(){
        $sitesetting = SiteSetting::first();
        return view('app.teachers', ['sitesetting' => $sitesetting, 'teachers' => Teacher::all()]);
    }

    public function contact(){
        $sitesetting = SiteSetting::first();
        return view('app.contact', ['sitesetting' => $sitesetting]);
    }

    public function gallery(){
        $sitesetting = SiteSetting::first();
        return view('app.gallery', ['sitesetting' => $sitesetting, 'gallery' => Gallery::orderBy('created_at', 'desc')->get()]);
    }

    public function classes(){
        $sitesetting = SiteSetting::first();
        return view('app.classes', ['sitesetting' => $sitesetting, 'courses' => Course::all()]);
    }

    public function career(){
        $sitesetting = SiteSetting::first();
        $about = About::first();
        $service = Service::orderBy('created_at', 'desc')->get();

        return view('app.career', ['sitesetting' => $sitesetting, 'about' => $about, 'services' =>$service]);
    }

}
