<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', ["comics" => $comics]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);


        return view("comic.show", ["comic" => $comic]);
    }

    private function truncate($text, $chars = 25)
    {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }

    public function create()
    {
        return view("comic.create");
    }

    public function store(Request $request)
{
    // $data = $request->all();
    $data = $request->validate(([
        "title" => "required|string",
        "description" => "required|string",
        "image" => "required|string",
        "price" => "required|integer",
        "series" => "required|string",
        "type" => "required|string",
        "artists" => "required|string",
        "writers" => "required|string",
    ]));

    $data["artists"] = json_encode([$data["artists"]]);
    $data["writers"] = json_encode([$data["writers"]]);

    $newComic = new Comic();

    $newComic->fill($data);

    // $newComic->title = $data["title"];
    // $newComic->description = $data["description"];
    // $newComic->image = $data["image"];
    // $newComic->price = number_format($data["price"], 2);
    // $newComic->series = $data["series"];
    // $newComic->type = $data["type"];
    // $newComic->artists = $data["artists"];
    // $newComic->writers = $data["writers"];

    $newComic->save();

    return redirect()->route("comic.show", $newComic->id);
}
}
