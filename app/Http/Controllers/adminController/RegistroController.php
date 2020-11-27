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
        if($request->hasFile('anexo') && $request->anexo->isValid()){
            $anexo = $request->file('anexo')->store('imagens');
        }
        $titulo = $request->input('titulo');
        $descricao = $request->input('descricao');
        $anexo = $request->input('anexo');
        $data = new Registro();
        $data->titulo = $titulo;
        $data->descricao = $descricao;
        $data->anexo = $anexo;
        $data->save();
        return redirect()->route('cadastro.add');   
    }
    public function list(){
        $lista = Registro::All();
        return view('adminViews.lista',['lista'=>$lista]);
    }
}
