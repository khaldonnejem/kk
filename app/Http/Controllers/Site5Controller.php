<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site5Controller extends Controller
{

    public function index()
    {
        return view('site5.index');
    }

    public function services()
    {
        return view('site5.services');
    }

    public function portfolio()
    {


        $portfolios =[
            [
                'caption-heading' => 'Threads',
                'image' => '1.jpg',
                'caption-subheading'  => 'Illustration',

            ],
            [
                'caption-heading' => 'Explore',
                'image' => '2.jpg',
                'caption-subheading'  => 'Graphic Design
                ',

            ],
            [
                'caption-heading' => 'Finish',
                'image' => '3.jpg',
                'caption-subheading'  => 'Identity',

            ],
            [
                'caption-heading' => 'Lines',
                'image' => '4.jpg',
                'caption-subheading'  => 'Branding',

            ],
            [
                'caption-heading' => 'Southwest',
                'image' => '5.jpg',
                'caption-subheading'  => 'Website Design',

            ],
            [
                'caption-heading' => 'Window',
                'image' => '6.jpg',
                'caption-subheading'  => 'Photography',

            ],
        ];

        return view('site5.portfolio',compact('portfolios'));
    }

    public function about()
    {
        $images =[

        [
            'timeline-heading' => '2009-2011',
            'image' => '1.jpg',
            'subheading'  => 'Our Humble Beginnings',

            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        ],
        [
            'timeline-heading' => 'March 2011',
            'image' => '2.jpg',
            'subheading'  => 'An Agency is Born',

            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        ],
        [
            'timeline-heading' => 'December 2015',
            'image' => '3.jpg',
            'subheading'  => 'Transition to Full Service',

            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!

            ',
        ],
        [
            'timeline-heading' => 'July 2020',
            'image' => '4.jpg',
            'subheading'  => 'Phase Two Expansion',

            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        ],
    ];

        return view('site5.about',compact('images'));
    }

    public function team()
    {
        $members=[
            [
                'image' => '1.jpg',
                'name' => 'Parveen Anand',
                'major' => 'Lead Designers',
            ],
            [
                'image' => '2.jpg',
                'name' => 'Diana Petersen',
                'major' => 'Lead Marketer',
            ],
            [
                'image' => '3.jpg',
                'name' => 'Lead Marketer',
                'major' => 'Lead Developer',
            ],
        ];

        $clients=[
            [
                'svg' => 'microsoft.svg'
            ],
            [
                'svg' => 'google.svg'
            ],
            [
                'svg' => 'facebook.svg'
            ],
            [
                'svg' => 'ibm.svg'
            ],
        ];
        return view('site5.team',compact('members','clients'));
    }

    public function contact()
    {
        return view('site5.contact');
    }


}
