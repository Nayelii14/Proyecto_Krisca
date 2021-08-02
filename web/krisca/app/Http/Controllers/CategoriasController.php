<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function getCategorias(){
        $categoria=Categoria::all();

        return $categoria;
    }

    public function crearCategoria(Request $request){
        $input = $request->all();
        $categoria = new Categoria();
        $categoria->nombre=$input["nom_categoria"];
        $categoria->save();


        return $producto;
    }

    public function eliminarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return "ok";

    }

    public function actualizarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $categoria = Categoria::findOrFail($id);
        $categoria->save();
        return $categoria; 
    }
}
