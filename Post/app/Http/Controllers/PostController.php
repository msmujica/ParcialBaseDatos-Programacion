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
        $p -> id_Autor = Auth::user()->id;
        $p -> save();

        return redirect("/CrearPost")->with("Creado",true);
    }
    
    public function Listar(Request $request){

        return view("listarPost",['post' => Post::paginate(3)]);
    }

    public function listarPostPorUsuario(Request $request) {
        $usuario = Auth::user();
        $posts = $usuario->posts;
        return view("listarPostUsuario",['post' => $posts]);
    }

    public function Eliminar(Request $request, $idPost){
        $post = Post::findOrFail($idPost);
        $post -> delete();

        return redirect("/ListarPost")->with("modificado",true);
    }

    public function CargarFormularioDeModificacion(Request $request, $idPost){
        $post = Post::findOrFail($idPost);
        return view("formularioModificarPosts",[
            "post" => $post
        ]);
    }

    public function Modificar(Request $request){
        $post = Post::find($request -> post("id"));
        
        $post -> Titulo = $request -> post("Titulo");
        $post -> Cuerpo = $request -> post("Cuerpo");
        $post -> Autor = $request -> post("Autor");

        $post -> save();

        return redirect("/ListarPost")->with("modificado",true);
    }
}
