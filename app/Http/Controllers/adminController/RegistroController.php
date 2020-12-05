<?php

namespace App\Http\Controllers\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registro;
use App\User;

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
         //SALVANDO O ID DO USUARIO, PARA ISSO É PRECISO PEGAR ID DO USUARIO LOGADO, ANTES SE CHAMA A CLASSE AUTH
        $data->user_id = auth()->user()->id;
        $data->save();
        return redirect()->route('lista.list') 
        ->with('mensagemCadastro', 'Publicado com sucesso!');
    }

    public function list(){
        $lista = Registro::all();
        return view('adminViews.lista',['lista'=>$lista]);
    }

    public function myList(Registro $registro){
        $registros =  $registro->where('user_id', auth()->user()->id)->get();
        return view('adminViews.minhaLista',['registros'=>$registros]);
    }

    public function edit($id){
        $data = Registro::find($id);
        if($data){
            return view('adminViews.editaMinhaLista',['data'=>$data]);
        }else{
            return redirect()->route('minhaLista.myList');
        }
    }

    public function editAction(Request $request, $id){
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
        Registro::find($id)
        ->update(['titulo'=>$titulo,'descricao'=>$descricao,'anexo'=>$anexo]);
        return redirect()->route('minhaLista.myList')
        ->with('mensagemEdicao', 'Publicação alterada com sucesso!');
    }

    public function del($id){
        Registro::find($id)->delete();
        return redirect()->route('minhaLista.myList')
        ->with('mensagemExclusao', 'Publicação excluída com sucesso!');
    }
}
