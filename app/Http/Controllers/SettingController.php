<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Session;


class SettingController extends Controller
{
    public function edit()
    {
        return view('admin.setting')->with('setting', SiteSetting::first());
    }

    public function update(Request $req, $id)
    {
      $setting = SiteSetting::find($id);

      $this->validate($req,[
        'title' => 'max:255|required',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required'
      ]);

      if ($req->hasFile('logo')) {
        $img = $req->logo;
        $img_new_name = Time().$img->getClientOriginalName();
        $img->move('images/logo',$img_new_name);
        $setting->logo = 'images/logo/'.$img_new_name;
      }

      $setting->title = $req->title;
      $setting->phone = $req->phone;
      $setting->email = $req->email;
      $setting->address = $req->address;
      $setting->facebook = $req->facebook;
      $setting->twitter = $req->twitter;

      $setting->save();
      Session::flash('success','Settings Updated Successfully!');

      return redirect()->route('home');

    }
}
