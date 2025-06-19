<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Episode;
use App\Models\Review;
use App\Models\VideoSource;

class AdminController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['genres', 'countries', 'directors', 'actors', 'episodes'])->get();
        $genres = Genre::all();
        $countries = Country::all();
        return view('admin.dashboard', compact('movies', 'genres', 'countries'));
    }

    public function createMovie()
    {
        $genres = Genre::all();
        $countries = Country::all();
        $directors = \App\Models\Director::all();
        $actors = \App\Models\Actor::all();
        return view('admin.create-movie', compact('genres', 'countries', 'directors', 'actors'));
    }

    public function storeMovie(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_year' => 'nullable|integer',
            'duration' => 'nullable|integer',
            'rating' => 'nullable|numeric|between:0,10',
            'poster_url' => 'nullable|url',
            'trailer_url' => 'nullable|url',
            'genres' => 'required|array',
            'countries' => 'required|array',
            'directors' => 'required|array',
            'actors' => 'required|array',
        ]);

        $movie = Movie::create($request->only(['title', 'description', 'release_year', 'duration', 'rating', 'poster_url', 'trailer_url']));

        $movie->genres()->sync($request->genres);
        $movie->countries()->sync($request->countries);
        $movie->directors()->sync($request->directors);
        $movie->actors()->sync($request->actors);

        return redirect()->route('admin.index')->with('success', 'Phim đã được thêm thành công!');
    }

    public function apiMovies()
    {
        $movies = Movie::with(['genres', 'countries'])->get();
        return response()->json($movies);
    }
}
