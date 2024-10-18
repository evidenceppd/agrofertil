<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use DB;

class GalleryController extends Controller
{

    function index() {
        $leftGallery = Posts::where('published', '=', 1)->orderBy('created_at', 'DESC')->get()->take(1);
        $rightSupGallery = Posts::where('published', '=', 1)->orderBy('created_at', 'DESC')->get()->take(3)->skip(1);
        $rightInfGallery = Posts::where('published', '=', 1)->orderBy('created_at', 'DESC')->get()->take(5)->skip(3);
        $allGallerys = Posts::where('published', '=', 1)->orderBy('created_at', 'DESC')->get()->skip(5);
        return view('galeria', compact('leftGallery', 'rightSupGallery', 'rightInfGallery', 'allGallerys'));
    }

    function single($galeria) {
        $galeria = Posts::where('url','=', $galeria)->where('published', '=', 1)->firstOrFail();
        $photosGallery = DB::table('blog_galeria')->where('id_blog', '=', $galeria->id)->get();
        $recentposts = Posts::where('published', '=', 1)->where('id', '!=', $galeria->id)->orderby('created_at', 'desc')->take(3)->get();

        return view('single-gallery', compact('galeria', 'photosGallery', 'recentposts'));
    }

}
