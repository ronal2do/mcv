<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Post;
use App\Categoria;


class PostController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	return view('admin.posts.index');

    }

    public function create(){

    	$categorias = Categoria::lists('titulo', 'id');
    	return view('admin.posts.criar', compact('categorias'));
    }

    public function store(Request $request)
    {

        $dadosForm = $request->all();

      	//dd($request->all());
        //upload
        $file = $request->file('foto');

        if( $request->hasFile('foto') && $file->isValid() ){

            $file->move('imgs/destaques', $file->getClientOriginalName());
        }

        $dadosForm['foto'] = $file->getClientOriginalName();

        $post = Post::create($dadosForm);

        return redirect("admin/posts");
    }
}
