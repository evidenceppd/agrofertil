<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use DB;

class SiteController extends Controller
{
    public function index() {

        $posts = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->take(8)->get();

        return view('index', ['posts' => $posts]);
    }

    public function galeria() {


        return view('galeria');
    }

    public function termos() {
        return view('termos-e-condicoes');
    }

    public function politica() {
        return view('politica-de-privacidade');
    }
}
