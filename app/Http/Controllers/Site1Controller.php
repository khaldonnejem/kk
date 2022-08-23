<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {

        $title = 'First Website';
        $desc = 'This is my first Website using laravel';

        $about_f = 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.';
        $about_l = 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!';

        $file = 'dddddddd';

        $portfolios =[
            [
                'title' => 'LOG CABIN',
                'image' => 'cabin.png',
                'text'  => 'Lorem1',
            ],
            [
                'title' => 'TASTY CAKE',
                'image' => 'cake.png',
                'text'  => 'Lorem2',
            ],
            [
                'title' => 'CIRCUS TENT',
                'image' => 'circus.png',
                'text'  => 'Lorem3',
            ],
            [
                'title' => 'CONTROLLER',
                'image' => 'game.png',
                'text'  => 'Lorem4',
            ],
            [
                'title' => 'LOCKED SAFE',
                'image' => 'safe.png',
                'text'  => 'Lorem5',
            ],
            [
                'title' => 'SUBMARINE',
                'image' => 'submarine.png',
                'text'  => 'Lorem6',
            ],
        ];

        $data = [
        ['Ahmed','ahmed@gmail.com','123456789'],
        ['Amal','amal@gmail.com','45245252'],
        ['Lama','lama@gmail.com','452555'],
        ['Ali','ali@gmail.com','14455'],

        ];

        return view('site1.index' , compact('title', 'desc','about_f','about_l','file','portfolios','data'));
    }
}
