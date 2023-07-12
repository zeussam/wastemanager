<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        return view('reviews.createreview');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|max:255',
        ]);

        $review = Review::create([
            'user_id' => auth()->user()->id,
            'rating' => $validatedData['rating'],
            'review' => $validatedData['review'],
        ]);

        // Optionally, you can add a success flash message
        session()->flash('success', 'Review submitted successfully.');

        return redirect()->route('reviews.index');
    }

    public function index()
    {
        $reviews = Review::all();
        return view('reviews.viewreview', compact('reviews'));
    }
}
