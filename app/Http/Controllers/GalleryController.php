<?php

namespace App\Http\Controllers;
use App\Gallery;
use Session;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index')->with('images', Gallery::orderBy('created_at', 'desc')->paginate(12));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
          'img' => 'required'
        ]);

        if ($request->hasFile('img'))
        {
            $count = count($request->img);

            for ($i=0; $i < $count; $i++)
            {
              $image = new Gallery;
              $img = $request->img[$i];
              $new_img_name = Time().$img->getClientOriginalName();
              $img->move('uploads/gallery',$new_img_name);
              $image->img = '/uploads/gallery/' . $new_img_name;
              $image->save();
            }
        }
        Session::flash('success','Photos Uploaded Successfully!');

          return redirect()->route('gallery.index');
    }

    public function delete($id)
    {
        $image = Gallery::find($id);
        $image->delete();
        Session::flash('success','Photo Deleted Successfully!');
        return redirect()->back();
    }
}
