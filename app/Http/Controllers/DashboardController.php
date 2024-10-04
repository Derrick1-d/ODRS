<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('user_id', auth()->id())->get();

        return view('dashboard', compact('testimonials'));
    }
}

