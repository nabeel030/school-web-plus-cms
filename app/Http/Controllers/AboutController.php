<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;

class AboutController extends Controller
{
    public function edit()
    {
        return view('admin.aboutedit')->with('about', About::first());
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'title' => 'max:255|required',
          'description' => 'required',
          'experience' => 'required',
          'stdcount' => 'required',
          'success' => 'required'
        ]);

        $about = About::find($id);

        $about->title = $request->title;
        $about->description = $request->description;
        $about->experience = $request->experience;
        $about->stdcount = $request->stdcount;
        $about->success = $request->success;
        $about->save();

        Session::flash('success','Information Updated Successfully!');

        return redirect()->back();
    }
}
