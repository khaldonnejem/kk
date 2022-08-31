<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site4Controller extends Controller
{
    public function index()
    {
        return view('site4.index');
    }

    public function about()
    {
        return view('site4.about');
    }

    public function services()
    {
        return view('site4.services');
    }

    public function portfolio()
    {
        $portfolios =[
            [
                'title' => 'Project Name',
                'image' => '1.jpg',
                'text'  => 'Category',

            ],
            [
                'title' => 'Project Name',
                'image' => '2.jpg',
                'text'  => 'Category',

            ],
            [
                'title' => 'Rafat Nejem',
                'image' => '3.jpg',
                'text'  => 'khaldon',

            ],
            [
                'title' => 'Project Name',
                'image' => '4.jpg',
                'text'  => 'Category',

            ],
            [
                'title' => 'Project Name',
                'image' => '5.jpg',
                'text'  => 'Category',

            ],
            [
                'title' => 'Project Name',
                'image' => '6.jpg',
                'text'  => 'Category',

            ],
        ];

        return view('site4.portfolio',compact('portfolios'));
    }

    public function contact()
    {
        return view('site4.contact');
    }


}
