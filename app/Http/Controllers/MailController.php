<?php

namespace App\Http\Controllers;

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
}
