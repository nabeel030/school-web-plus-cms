<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Session;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.courses.index')->with('courses', Course::orderBy('created_at', 'desc')->get());
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
          'title' => 'max:255|required',
          'img' => 'image|required',
          'description' => 'required'
        ]);

        $img = $request->img;
        $img_new_name = Time().$img->getClientOriginalName();
        $img->move('uploads/classes',$img_new_name);

        Course::create([
          'title' => $request->title,
          'img' => '/uploads/classes/'.$img_new_name,
          'description' => $request->description
        ]);

        Session::flash('success','Class Added Successfully!');

        return redirect()->route('course.index');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.courses.edit')->with('course', $course);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'title' => 'max:255|required',
          'img' => 'image',
          'description' => 'required'
      ]);

      $course = Course::find($id);

      if ($request->hasFile('img'))
      {
        $img = $request->img;
        $img_new_name = Time().$img->getClientOriginalName();
        $img->move('uploads/classes',$img_new_name);
        $course->img = '/uploads/classes/'.$img_new_name;
      }
        $course->title = $request->title;
        $course->description = $request->description;
        $course->save();

        Session::flash('success','Class Updated Successfully!');

        return redirect()->route('course.index');

    }

    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        Session::flash('success','Class Deleted Successfully!');
        return redirect()->route('course.index');
    }
}
