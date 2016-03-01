<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Categoria;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	return view('admin.categorias.index');

    }

    public function create(){
    	
    	return view('admin.categorias.criar');

    }

    public function store(Request $request)
    {

        $input = $request->all();

        $categoria = Categoria::create($input);

        return redirect("/home");
    }

}
