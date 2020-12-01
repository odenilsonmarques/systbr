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
            'titulo'=>['required','string','min:10','max:30'],
            'descricao'=>['required','string','min:20','max:150'],
            'anexo'=>['required','file'],
        ]);
        $titulo = strtoupper($request->input('titulo'));
        $descricao = strtoupper($request->input('descricao'));
        $anexo = $request->input('anexo');

        if($request->hasFile('anexo') && $request->anexo->isValid()){
            $anexo = $request->file('anexo')->store('imagens');
        }

        $data = new Registro();
        $data->titulo = $titulo;
        $data->descricao = $descricao;
        $data->anexo = $anexo;
        $data->save();
        return redirect()->route('lista.list');   
    }
    public function list(){
        $lista = Registro::all();
        return view('adminViews.lista',['lista'=>$lista]);
    }
}
