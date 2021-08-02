<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getClienteId(Request $request){
        $input = $request->all();
        $filtro = $input["id"];
        $cliente = Cliente::where("id",$filtro)->get();
        return $cliente;
    }

    public function getClienteCorreo(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        //if(Cliente::where("correo",$filtro)->get()!=[]){
        $cliente = Cliente::where("correo",$filtro)->get();
        return $cliente;
        //}else{
            //return $msg="No encontrado"; //Credenciales incorrectas
        //}
        
    }

    public function crearCliente(Request $request){
        $input = $request->all();
        $cliente =new Cliente();
        $cliente->nombre = $input["nombre"];
        $cliente->apellidos = $input["apellidos"];
        $cliente->rut = $input["rut"];
        $cliente->pass = $input["pass"];

        $cliente->save();
        return $cliente;
    }

    public function eliminarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return "ok";
    }

    public function actualizarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $input["nombre"];
        $cliente->apellidos = $input["apellidos"];
        $cliente->pass = $input["pass"];
        $cliente->rut = $input["rut"];
        $cliente->save();
        return $cliente; 
    }
}
