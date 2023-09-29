<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
         
        return view('comic.index', ["comics" => $comics]);
    }

    public function show($id) {
        $comic = Comic::findOrFail($id);


        return view("comic.show", ["comic" => $comic]);
    }

    private function truncate($text, $chars = 25) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }

}
