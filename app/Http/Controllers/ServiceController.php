<?php

namespace App\Http\Controllers;

use App\DataTables\ServicesDataTable;
use Illuminate\Http\Request;
use App\Service;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServicesDataTable $dataTable)
    {
        return $dataTable->render('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
          'description' => 'required'
        ]);

        Service::create([
          'title' => $request->title,
          'description' => $request->description
        ]);

        Session::flash('success','Service Added Successfully!');

        return redirect()->route('services.index');
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
        return view('admin.service.edit')->with('service', Service::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modify(Request $request, $id)
    {
      $this->validate($request,[
        'title' => 'max:255|required',
        'description' => 'required'
      ]);

      $service = Service::find($id);
      $service->title = $request->title;
      $service->description = $request->description;
      $service->save();
      Session::flash('success','Service Updated Successfully!');

      return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        Session::flash('success','Service Deleted Successfully!');

        return redirect()->back();
    }
}
