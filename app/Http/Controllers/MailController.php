<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\KhaldonMail;
use App\Mail\TestMail;
use App\Mail\TestMali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new TestMail());

        // mail('admin@gmail.com','Test','This is test mail');
        return 'Done';
    }

    public function contact_us()
    {
        return view('forms.contact_us');
    }

    public function contact_us_data(Request $request)
    {
        $request->validate(([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'cv' => 'required',
        ]));

        $data = $request->except('_token');

        $cv_new_name =rand() . time() . $request->file('cv')->getClientOriginalName();

        // abc.pdf => 568615345454abc.pdf
        $request->file('cv')->move(public_path('uplods'), $cv_new_name);

        $data['cv'] = $cv_new_name;

        Mail::to('contact@visionplus.com')->send(new ContactUsMail($data));

        return 'sent';
        // dd($request->all());

    }

    public function send_gmail()
    {
        return view('forms.send_gmail');
    }

    public function send_gmail_data(Request $request)
    {
        $email = $request->email;
        // $message = $request->message;
        Mail::to($email)->send(new KhaldonMail());


        // Mail::to('aryastarke819@gmail.com')->send(new KhaldonMail());
        return 'message sent';
    // dd($request->except('_token'));
    }
}
