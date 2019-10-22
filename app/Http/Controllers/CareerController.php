<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'cv' => 'required|mimes:doc,pdf,docx,zip'
        ]);

        $fileName = "CV".time().'.'.request()->cv->getClientOriginalExtension();

        $request->cv->storeAs('resume',$fileName);
    }
}
