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
            ],
            (object)[
                'title' => 'UI/UX Design',
                'description' => 'Creating user-friendly and visually appealing designs for web and mobile applications.',
                'icon' => 'fas fa-paint-brush',
            ],
            (object)[
                'title' => 'SEO Optimization',
                'description' => 'Improving website visibility and search engine rankings through effective SEO strategies.',
                'icon' => 'fas fa-search',
            ],
            ];
        return view('services');
    }
}
