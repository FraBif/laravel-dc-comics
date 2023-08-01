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

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request -> all();
        $newComic = new Comic();
        $newComic -> title = $data["title"];
        $newComic -> description = $data["description"];
        $newComic -> thumb = $data["thumb"];
        $newComic -> price = $data["price"];
        $newComic -> series = $data["series"];
        $newComic -> sale_date = $data["sale_date"];
        $newComic -> type = $data["type"];
        $newComic -> artists = $data["artists"];
        $newComic -> writers = $data["writers"];
        $newComic -> save();

        return redirect() -> route("show", $newComic -> id);
    }

}
