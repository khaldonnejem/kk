<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Khaldon';
        $text = 'New Text';
        // return view('test')->with('name',$name)->with('xyz',$text);
        // return view('test',compact('name','text'));

        return view('test',[
            'name' => $name,
            'text' => $text

        ]);
    }

    public function about()
    {
        return'about';
    }

    public function contact()
    {
        return'contact';
    }

    public function user($id)
    {
        return 'user' . $id;
    }


}
