<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        /* dd($movies); */

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
}
