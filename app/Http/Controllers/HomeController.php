<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
        $homeItem = [
            (object)[
                'name' => ' AH Samin Yasar',
                'description' => 'Professional Full Stack Web Developer & Designer',
                'cv_link' => 'https://drive.google.com/file/d/1-pbz1Pgxay5W2JORfFRv6SZfyMi64NQq/view?usp=sharing',

            ]
        ];
        $featureWork =[
            [
                'image' => asset('assets/images/project1.jpg'),
                'title' => 'E-commerce Website',
                'short_description' => 'A fully responsive online store with payment integration.',

            ],
            [
                'image' => asset('assets/images/project2.jpg'),
                'title' => 'Mobile App Design',
                'short_description' => 'UI/UX design for a fitness tracking application.',

            ],
            [
                'image' => asset('assets/images/project3.jpg'),
                'title' => 'Corporate Website',
                'short_description' => 'A modern website for a financial services company.',

            ],
        ];
        
        return view('home', compact('featureWork', 'homeItem'));
    }
}