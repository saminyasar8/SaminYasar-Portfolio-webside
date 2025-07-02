<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutItem = [
            (object)[
                'image' => asset('assets/images/avatar.jpg'),

                
                'name' => 'AH Samin Yasar',
                'email' => 'saminy@example.com',
                'phone' => '(123) 456-7890',
                'experience' => '5+ Years',
                'location' => 'Mirpur, Dhaka',
                'freelance' => 'Bangladesh',
            ],
            
            
        ];
        // Define a mapping of skill names to Bootstrap color classes for maintainability
        $skillColors = [
            'HTML5' => 'bg-success',
            'CSS3' => 'bg-info',
            'JavaScript' => 'bg-warning',
            'PHP' => 'bg-danger',
            'Laravel' => 'bg-primary',
        ];

        $skillsItem = [
            [
                'name' => 'HTML5',
                'color' => 'success',
                'percentage' => 95,
            ],
            [
                'name' => 'CSS3',
                'color' => 'info',
                'percentage' => 85,
            ],
            [
                'name' => 'JavaScript',
                'color' => 'warning',
                'percentage' => 80,
            ],
            [
                'name' => 'PHP',
                'color' => 'danger',
                'percentage' => 85,
            ],
            [
                'name' => 'Laravel',
                'color' => 'primary',
                'percentage' => 95,
            ],
            
            [
                'name' => 'MySQL',
                'color' => 'gray',
                'percentage' => 80,
            ],
            [
                'name' => 'Git',
                'color' => 'success',
                'percentage' => 80,
            ],
            [
                'name' => 'Bootstrap',
                'color' => 'info',
                'percentage' => 90,
            ],      
            [
                'name' => 'Tailwind CSS',
                'color' => 'warning',
                'percentage' => 75,
            ],
            [
                'name' => 'Vue.js',
                'color' => 'danger',
                'percentage' => 70,
            ],
            
           
        ];
        return view('about', compact('aboutItem' , 'skillsItem'));
    }
}
