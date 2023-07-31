<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::paginate(6);

        return view('home', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('show', compact('comic'));
    }

}
