<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        /*  $movies = Movie::where('nationality', 'american',)->get(); */
        /*  $movies = Movie::where('vote', '>', '9')->orderBy('vote', 'desc')->get(); */
        /*  $filt_movies = $movies->whereBetween('vote', [8, 9]); */
        /*  $query = Movie::all()->sortBy('vote'); */




        /* dd($best_movies); */

        return view('welcome', compact('movies'));
    }
    public function toContacts()
    {
        return view('contacts');
    }
    public function toAbout()
    {
        return view('about');
    }
    public function toBest()
    {
        $best_movies = Movie::orderBy('vote', 'desc')->limit(3)->get();
        /*  dd($best_movies); */

        return view('best', compact('best_movies'));
    }
    public function toWorst()
    {
        $worst_movies = Movie::orderBy('vote', 'asc')->limit(3)->get();

        return view('worst', compact('worst_movies'));
    }
}
