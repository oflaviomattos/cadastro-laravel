<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Usuario as UsuarioModel;

class Usuario extends Controller
{
    public function cadastrar ()
    {
        //dd(Hash::make('123'), md5('123'), sha1('123'));
       return view ('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuario,email",
            "senha" => "min:5"
        ]);

        if(UsuarioModel::cadastrar($request)){
            return view('usuario.sucesso', [
                "fulano" => $request->input('nome')
            ]);
        }else{
            echo "Ops! Falha ao cadastrar!";
        }
    }
}
