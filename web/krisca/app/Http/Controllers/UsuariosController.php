<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getUsuario(Request $request){
        $input = $request->all();
        $filtro = $input["id"];
        $usuario = Usuario::where("id",$filtro)->get();
        return $usuario;
    }
    public function getUsuarioCorreo(Request $request){
        $input = $request->all();
        $filtro = $input["correo"];
        $usuario = Usuario::where("correo",$filtro)->get();
        return $usuario;
    }
    public function getAllUsers(){
        $usuarios = Usuario::all();
        return $usuarios;
    }
    public function crearUsuario(Request $request){
        $input = $request->all();
        $usuario =new Usuario();
        $usuario->nombre = $input["nombre"];
        $usuario->apellidos = $input["apellidos"];
        $usuario->pass = $input["pass"];
        $usuario->nivel_acceso = $input["nivel_acceso"];
        $usuario->correo = $input["correo"];

        $usuario->save();
        return $usuario;
    }

    public function eliminarUsuario(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return "ok";
    }

    public function actualizarUsuario(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre = $input["nombre"];
        $usuario->apellidos = $input["apellidos"];
        $usuario->pass = $input["pass"];
        $usuario->nivel_acceso = $input["nivel_acceso"];
        $usuario->save();
        return $usuario; 
    }
}
