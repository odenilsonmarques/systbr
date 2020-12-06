<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comentario;

class ComentarioController extends Controller
{
    public function addComentAction(Request $request){
        $request->validate([
            'descricao'=>['string','max:100'],
        ]);
        $descricao = strtoupper($request->input('descricao'));
        $registro_id = ($request->input('registro_id'));
        $data = new Comentario();
        $data->descricao = $descricao;
        $data->save();
        return redirect()->route('lista.list');
    }
    
}
