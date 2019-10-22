<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parents;
use Session;

class ParentController extends Controller
{
    public function index()
    {
        return view('admin.parents.index')->with('parents', Parents::all());
    }

    public function create()
    {
        return view('admin.parents.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
          'name' => 'max:255|required',
          'relation' => 'max:255|required',
          'review' => 'required'
        ]);

        $parent = new Parents;

        if ($request->hasFile('img')) {
            $img = $request->img;
            $new_img_name = Time().$img->getClientOriginalName();
            $img->move('uploads/parents',$new_img_name);
            $parent->img = '/uploads/parents/'.$new_img_name;
        }

        else {
            $parent->img = '/uploads/parents/teacher-2.jpg';
        }

        $parent->name = $request->name;
        $parent->relation = $request->relation;
        $parent->review = $request->review;
        $parent->save();

        Session::flash('success','Parent Review Added Successfully!');

        return redirect()->route('parent.index');
    }

    public function edit($id)
    {
        $parent = Parents::find($id);
        return view('admin.parents.edit')->with('parent', $parent);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'name' => 'max:255|required',
        'relation' => 'max:255|required',
        'review' => 'required'
      ]);

      $parent = Parents::find($id);

      if ($request->hasFile('img')) {
          $img = $request->img;
          $new_img_name = Time().$img->getClientOriginalName();
          $img->move('uploads/parents',$new_img_name);
          $parent->img = '/uploads/parents/'.$new_img_name;
      }

      $parent->name = $request->name;
      $parent->relation = $request->relation;
      $parent->review = $request->review;
      $parent->save();

      Session::flash('success','Parent Review Updated Successfully!');

      return redirect()->route('parent.index');
    }

    public function delete($id)
    {
        $parent = Parents::find($id);
        $parent->delete();
        Session::flash('success','Parent Review Deleted Successfully!');
        return redirect()->back();
    }
}
