<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registro;

class RegistroController extends Controller
{
    public function add(){
        return view('adminViews.cadastro');
    }
    public function addAction(Request $request){
        $request->validate([
            'titulo'=>['required','string','min:10'],
            'descricao'=>['required','string','min:20','max:150'],
        ]);

        dd($request->file('anexoUm'));
    
        
        $titulo = $request->input('titulo');
        $descricao= $request->input('descricao');
        
        $data = new Registro();
        $data->titulo = $titulo;
        $data->descricao = $descricao;
        $data->save();
        return redirect()->route('cadastro.add');
        
    }
}
