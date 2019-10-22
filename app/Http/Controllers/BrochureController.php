<?php

namespace App\Http\Controllers;
use App\Brochure;

use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function create()
    {
        return view('admin.brochure.brochure');
    }

    public function index()
    {
            return view('admin.brochure.index')->with('brochures', Brochure::orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'max:255|required',
            'image' => 'image|required'
        ]);

        $img = $request->image;
        $img_new_name = Time().$img->getClientOriginalName();
        $img->move('uploads/brochure', $img_new_name);

        Brochure::create([
            'title' => $request->title,
            'image' => '/uploads/brochure/' . $img_new_name,
        ]);

        return redirect()->route('brochure.index');
    }

    public function activate($id)
    {
            $brochure = Brochure::find($id);

            $brochures = Brochure::where('active', '=', 1)->update(array('active' => 0));

            $brochure->active = 1;
            $brochure->save();

            return redirect()->back();
    }

    public function deactivate($id)
    {
            $brochure = Brochure::find($id);
            $brochure->active = 0;
            $brochure->save();

            return redirect()->back();
    }

    public function delete($id)
    {
            $brochure = Brochure::find($id);
            $brochure->delete();
            return redirect()->back();
    }
}
