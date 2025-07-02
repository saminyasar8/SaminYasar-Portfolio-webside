<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $servicesItem = [
            (object)[
                'title' => 'Web Development',
                'description' => 'Building responsive and modern websites using the latest technologies.',
                'icon' => 'fas fa-code',
                'features' => [
                    'Responsive Design',
                    'E-commerce Integration',
                    'Content Management Systems',
                ],
            ],
            (object)[
                'title' => 'UI/UX Design',
                'description' => 'Creating user-friendly and visually appealing designs for web and mobile applications.',
                'icon' => 'fas fa-paint-brush',
                'features' => [
                    'User Research',
                    'Wireframing',
                    'Prototyping',
                ],
            ],
            (object)[
                'title' => 'SEO Optimization',
                'description' => 'Improving website visibility and search engine rankings through effective SEO strategies.',
                'icon' => 'fas fa-search',
                'features' => [
                    'Keyword Research',
                    'On-Page Optimization',
                    'Link Building',
                ],

            ],
            (object)[
                'title' => 'Digital Marketing',
                'description' => 'Promoting your brand through various digital channels to reach a wider audience.',
                'icon' => 'fas fa-bullhorn',
                'features' => [
                    'Social Media Marketing',
                    'Email Campaigns',
                    'Content Marketing',
                ],
            ],
            (object)[
                'title' => 'Mobile App Development',
                'description' => 'Developing high-quality mobile applications for both Android and iOS platforms.',
                'icon' => 'fas fa-mobile-alt',
                'features' => [             
                    'Cross-Platform Development',
                    'App Store Optimization',
                    'User Engagement Strategies',
                ],
            ],
            (object)[
                'title' => 'Cloud Solutions',
                'description' => 'Providing scalable and secure cloud solutions for your business needs.',
                'icon' => 'fas fa-cloud',               
                'features' => [
                    'Cloud Hosting',
                    'Data Backup Solutions',
                    'Scalability Options',
                ],
            ],
        ];
        return view('services', compact('servicesItem'));
    }
}
