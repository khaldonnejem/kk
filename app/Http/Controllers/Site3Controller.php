<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{

    public function index()
    {
        return view('site3.index');
    }

    public function experience()
    {
        return view('site3.experience');
    }

    public function education()
    {
        return view('site3.education');
    }

    public function skills()
    {
        return view('site3.skills');
    }

    public function interests()
    {
        return view('site3.interests');
    }

    public function awards()
    {

        $certificates = [
            'cirtificate 1',
            'cirtificate 2',
            'cirtificate 3',
            'cirtificate 4',
            'cirtificate 5',
            'cirtificate 6',
            'cirtificate 7',
            'cirtificate 8',
            'cirtificate 9',
        ];
        return view('site3.awards',compact('certificates'));
    }


}
