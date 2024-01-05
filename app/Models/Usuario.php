<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Api;

class Usuario extends Model
{
    use HasFactory;
    
    protected $connection = 'sqlite';
    protected $table = 'usuario';
    public $timestamps = false;


    protected $fillable = [
        'nome',
        'email',
        'senha'
    ];

    public static function listar(int $limit){
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limit);

        return $sql->get();
    }

    public static function cadastrar(Request $request){
        //DB::enableQueryLog();
        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make ($request->input('senha')),
            "data_cadastro" => new Carbon()
        ]);

    }
}
