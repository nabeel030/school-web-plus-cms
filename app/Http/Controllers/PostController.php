<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Session;
use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.post.index')->with('posts', Post::orderBy('created_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $category = Category::orderBy('created_at', 'desc')->get();
          $tags = Tag::orderBy('created_at', 'desc')->get();

          if ($category->count() == 0 || $tags->count()==0) {
          Session::flash('info','Please Create Category and Tag First!');
          return redirect()->back();
      }

      return view('admin.blog.post.create')->with('category', $category)
                                                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[

       'title' => 'max:255|required',
       'image' => 'image|required',
       'content' => 'required',
       'category_id' => 'required',
       'tags' => 'required'
     ]);

     $img = $request->image;

     $img_new_name = Time().$img->getClientOriginalName();

     $img->move('uploads/posts',$img_new_name);
     $slug = Str::slug($request->title, '-');

     $post = Post::create([
       'title' => $request->title,
       'image' => '/uploads/posts/' . $img_new_name,
       'content' => $request->content,
       'category_id' => $request->category_id,
       'slug' => $slug
     ]);

     $post->tags()->attach($request->tags);

     Session::flash('success', 'Post Created Successfully!');
     return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::orderBy('created_at', 'desc')->get();
        $tags = Tag::orderBy('created_at', 'desc')->get();

        return view('admin.blog.post.edit')->with('posts', Post::find($id))
                                            ->with('category', $category)
                                              ->with('tags', $tags);
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
      $this->validate($request,[

      'title' => 'max:255|required',
      'image' => 'image',
      'content' => 'required',
      'category_id' => 'required',
      'tags' => 'required'
    ]);

    $post = Post::find($id);

    if ($request->hasFile('image')) {
        $img = $request->image;
        $img_new_name = Time(). $img->getClientOriginalName();
        $img->move('uploads/posts',$img_new_name);
        $post->image = '/uploads/posts/'.$img_new_name;
    }
    $post->title = $request->title;
    $post->content = $request->content;
    $post->category_id = $request->category_id;

    $post->save();
    $post->tags()->sync($request->tags);
    Session::flash('success','Post Updated Successfully');
    return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
