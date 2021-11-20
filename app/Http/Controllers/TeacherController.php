<?php

namespace App\Http\Controllers;

use App\DataTables\TeachersDataTable;
use Illuminate\Http\Request;
use App\Teacher;
use Session;

class TeacherController extends Controller
{
    public function index(TeachersDataTable $dataTable)
    {
        return $dataTable->render('admin.teacher.index');
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
          'name' => 'max:255|required',
          'subject' => 'max:255|required',
          'review' => 'required',
          'img' => 'image',
          'qualification' => 'max:255|required'
        ]);

        $teacher = new Teacher;

        if ($request->hasFile('img')) {
            $img = $request->img;
            $new_img_name = Time().$img->getClientOriginalName();
            $img->move('uploads/teachers',$new_img_name);
            $teacher->img = '/uploads/teachers/'.$new_img_name;
        }

        else {
            if($request->gender == 'male')
                 $teacher->img = '/images/sample.png';
            else{
                $teacher->img = '/images/female.jpg';
            }
        }

        $teacher->name = $request->name;
        $teacher->subject = $request->subject;
        $teacher->qualification = $request->qualification;
        $teacher->review = $request->review;
        $teacher->gender = $request->gender;

        $teacher->save();
        Session::flash('success','New Teacher Added Successfully!');
        return redirect()->route('teacher.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit')->with('teacher', $teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        if ($request->hasFile('img')) {
            $img = $request->img;
            $new_img_name = Time().$img->getClientOriginalName();
            $img->move('uploads/teachers',$new_img_name);
            $teacher->img = '/uploads/teachers/'.$new_img_name;
        }

        $teacher->name = $request->name;
        $teacher->subject = $request->subject;
        $teacher->qualification = $request->qualification;
        $teacher->review = $request->review;
        $teacher->save();
        Session::flash('success','Teacher Info Updated Successfully!');
        return redirect()->route('teacher.index');
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        Session::flash('success','Teacher Deleted Successfully!');
        return redirect()->back();
    }
}
