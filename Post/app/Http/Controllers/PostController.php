<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function Insertar(Request $request){
        $p = new Post();

        $p -> Titulo = $request -> post("Titulo");
        $p -> Cuerpo = $request -> post("Cuerpo");
        $p -> Autor = Auth::user()->name;
        
        $p -> save();

        return redirect("/CrearPost")->with("Creado",true);
    }

}
