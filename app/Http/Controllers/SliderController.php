<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index')->with('slider', Slider::orderBy('created_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
          'img' => 'image|required'
        ]);

        if ($request->hasFile('img')) {
          $img = $request->img;
          $img_new_name = Time().$img->getClientOriginalName();
          $img->move('uploads/slider',$img_new_name);
        }

        Slider::create([
          'title' => $request->title,
          'img' => '/uploads/slider/'.$img_new_name,
        ]);

        Session::flash('success','Slider Image Added Successfully!');

        return redirect()->route('slider.index');
    }

     public function delete($id)
     {
       $slider = Slider::find($id);
       $slider->delete();
       Session::flash('success','Slider Image Deleted Successfully!');

       return redirect()->back();
     }

     public function edit($id)
     {
        $slider = Slider::find($id);
        return view('admin.slider.edit')->with('slider', $slider);
     }

     public function update(Request $request, $id)
     {
         $this->validate($request,[
         'title' => 'max:255|required',
       ]);

       $slider = Slider::find($id);

       if ($request->hasFile('img')) {
         $img = $request->img;
         $img_new_name = Time().$img->getClientOriginalName();
         $img->move('uploads/slider',$img_new_name);
         $slider->img = '/uploads/slider/'.$img_new_name;
       }

       $slider->title = $request->title;
       $slider->save();
       Session::flash('success','Slider Image Updated Successfully!');
       return redirect()->route('slider.index');
     }

}
