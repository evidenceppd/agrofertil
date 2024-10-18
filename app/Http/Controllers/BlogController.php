<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use DB;
use App\Models\PostCategories;

class BlogController extends Controller
{
    
    public function index() {
        $posts = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->paginate(9);
        $recentposts = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->take(3)->get();
        $tags = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->get();
        $category = PostCategories::all();

        return view('blog', ['posts' => $posts, 'category' => $category, 'recentposts' => $recentposts, 'tags' => $tags]);
    }

    public function single($posts) {
        $post = Posts::where('url','=', $posts)->where('published', '=', 1)->firstOrFail();
        $galeria = DB::table('blog_galeria')->where('id_blog', '=', $post->id)->get();

        $recentposts = Posts::where('published', '=', 1)->where('id', '!=', $post->id)->orderby('created_at', 'desc')->take(3)->get();
        $category = PostCategories::all();
        $tags = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->get();

        $next = Posts::where('id', '>', $post->id)->orderBy('id')->first();
        $previous = Posts::where('id', '<', $post->id)->orderBy('id','desc')->first();


        return view('blog-single', ['post' => $post, 'category' => $category, 'recentposts' => $recentposts, 'tags' => $tags, 'galeria' => $galeria,
        'next' => $next, 'previous' => $previous,
        
    ]);
    }

    public function categories($categorias) {
        $category = PostCategories::where('url', '=', $categorias)->firstOrFail();
        $allcategory = PostCategories::where('url', '!=', $categorias)->get();
        $recentposts = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->take(3)->get();
        $posts = $category->posts()->where('posts.published', '=', 1)->orderby('created_at', 'desc')->paginate(4);
        $tags = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->get();

        return view('blog-category', ['posts' => $posts, 'category' => $category, 'recentposts' => $recentposts, 'allcategory' => $allcategory, 'tags' => $tags]);
    }

    public function search(Request $request) {
        $category = PostCategories::all();
        $search = $request->input('campo');
        $recentposts = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->take(3)->get();
        $tags = Posts::where('published', '=', 1)->orderby('created_at', 'desc')->get();

        $posts = Posts::where(
            function($query) use ($search) {
                $query->where('title','like', "%{$search}%")
                ->where('published', '=', 1)
                ->orwhere('tags', 'like', "%{$search}%");
            }
        )->orderby('created_at', 'desc')->paginate(6);

        return view('search', ['posts' => $posts, 'search' => $search, 'category' => $category, 'recentposts' => $recentposts, 'tags' => $tags]);
    }
}
