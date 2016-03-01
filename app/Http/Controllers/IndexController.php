<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Post;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index()

    {
        $posts = Post::select()
            ->orderBy('id','desc')
            ->get();
        $categorias = Categoria::orderBy('titulo')->get();
      //dd($posts, $categorias);
        return view('welcome', compact('categorias', 'posts'));
    }

    public function view($slug)
    {
        $categorias = Categoria::all();
        $post = Post::findBySlug($slug);
        return view('post', compact('post', 'categorias'));
    }

}
