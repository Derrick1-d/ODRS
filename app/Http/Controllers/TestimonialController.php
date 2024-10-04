<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'testimonial' => 'required|string|max:1000',
        ]);

        $testimonial = new Testimonial();
        $testimonial->user_id = auth()->id();
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        return redirect()->back()->with('status', 'Testimonial submitted successfully!');
    }
}
