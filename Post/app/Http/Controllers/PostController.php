<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Carbon\Carbon;



class PostController extends Controller
{
    public function Insertar(Request $request){
        $this->ValidarFormularioInsertar($request);

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
        return view("listarPostUsuario",['post' => Auth::user()->posts->toQuery()->paginate(3)]);
    }


    public function Eliminar(Request $request, $idPost){
        $post = Post::findOrFail($idPost);
        $post -> delete();

        return redirect("/listarMisPosts")->with("eliminado",true);
    }

    public function CargarFormularioDeModificacion(Request $request, $idPost){
        $post = Post::findOrFail($idPost);
        return view("formularioModificarPosts",[
            "post" => $post
        ]);
    }

    public function Modificar(Request $request){
        $this -> ValidarFormularioModificacion($request);

        $post = Post::find($request -> post("id"));
        $post -> Titulo = $request -> post("Titulo");
        $post -> Cuerpo = $request -> post("Cuerpo");
        $post -> Autor = Auth::user()->name;

        $post -> save();

        return redirect("/listarMisPosts")->with("modificado",true); 
    }

    public function filtrarPorMes($mes){
    $post = Post::whereMonth('created_at', '=', Carbon::parse($mes)->month)->paginate(3);

    return view('listarPostPorMes', [ "post" => $post ]);
    }

    public function ValidarFormularioModificacion($request){
        $request->validate([
            'Titulo' => ['required'],
            'Cuerpo' => ['required'],
        ],[
            'Titulo.required' => 'Porfavor Ingrese Titulo',
            'Cuerpo.required' => 'Porfavor Ingrese Cuerpo',
        ]);
    }

    public function ValidarFormularioInsertar($request){
        $request->validate([
            'Titulo' => ['required'],
            'Cuerpo' => ['required'],
        ],[
            'Titulo.required' => 'Porfavor Ingrese Titulo',
            'Cuerpo.required' => 'Porfavor Ingrese Cuerpo',
        ]);
    }
}