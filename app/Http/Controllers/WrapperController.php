<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function searchtv(){
        $json= Http::get('https://api.themoviedb.org/3/search/tv?api_key=e6b38212baf459bc1749d1e0fa386e4c&query=I Love You Silly')->json();

        return response()->json($json);
    }
    public function searchmovie(){
        $json= Http::get('https://api.themoviedb.org/3/search/movie?api_key=e6b38212baf459bc1749d1e0fa386e4c&query=raya %26 the last dragon&language=en')->json();

        return response()->json($json);
    }
    public function genremovie(){
        $json= Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=e6b38212baf459bc1749d1e0fa386e4c')->json();

        return response()->json($json);
    }
    public function language(){
        $json= Http::get('https://api.themoviedb.org/3/configuration/languages?api_key=e6b38212baf459bc1749d1e0fa386e4c')->json();

        return response()->json($json);
    }
    public function detailmovie(){
        $json= Http::get('https://api.themoviedb.org/3/movie/589712?api_key=e6b38212baf459bc1749d1e0fa386e4c&language=en')->json();

        return response()->json($json);
    }
}
