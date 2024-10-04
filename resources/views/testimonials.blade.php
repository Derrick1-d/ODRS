@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Submit Your Testimonial</h2>
    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="testimonial">Your Testimonial</label>
            <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
