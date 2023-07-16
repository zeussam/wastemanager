<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ViewreviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.viewreview', compact('reviews'));
    }
}
