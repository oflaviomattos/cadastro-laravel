<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function salvar(Request $request){
        if(UsuarioModel::cadastrar($request)){
            return response("ok", 201);
        }else{
            return response("erro", 409);
        }
    }

    public function atualizar(Request $request, $id)
{
    $usuario = UsuarioModel::find($id);

    if (!$usuario) {
        return response("Usuário não encontrado", 404);
    }

    $usuario->update([
        'nome' => $request->input('nome'),
        'email' => $request->input('email'),
        'senha' => Hash::make ($request->input('senha')),
    ]);

    dd($request->all(), $usuario->toArray());

    return response("Usuário atualizado com sucesso", 200);
}
}