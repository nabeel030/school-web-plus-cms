<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\SiteSetting;
use Session;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {

          $this->validate($request, [

          'name' => 'max:255|required',
          'email' => 'required|email',
          'subject' => 'max:255|required',
          'mailmessage' => 'required'
        ]);

        $subject = $request->subject;

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'mailmessage' => $request->mailmessage
        ];

        Mail::send('app.emailSend', $data, function ($message) use ($data) {
            $message->to('nabeelahmed030@gmail.com', 'Nabeel')->subject('Message from Contact Form');
        });

        Session::flash('success', 'Thank you for contacting us. We will be back at you ASAP!');

        return redirect()->back();
}
}
