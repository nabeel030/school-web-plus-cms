<?php

namespace App\Http\Controllers;

use App\DataTables\TagsDataTable;
use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TagsDataTable $dataTable)
    {
        return $dataTable->render('admin.blog.tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.blog.tag.create');
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
          'tag' => 'max:255|required'
        ]);

        Tag::create([
          'tag' => $request->tag
        ]);

        Session::flash('success', 'Tag Added Successfully!');
        return redirect()->route('tag.index');
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
          return view('admin.blog.tag.edit')->with('tags', Tag::find($id));
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
        'tag' => 'max:255|required'
      ]);

      $tag = Tag::find($id);
      $tag->tag = $request->tag;
      $tag->save();

      Session::flash('success', 'Tag Updated Successfully!');
      return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tag =  Tag::find($id);
        $tag->delete();

        Session::flash('success', 'Tag Deleted Successfully!');
        return redirect()->route('tag.index');
    }
}
