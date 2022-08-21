<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('test.php');
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
