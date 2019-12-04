<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
class CusitController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sobre(){
        return view('sobre');
    }

    public function contato(){
        return view('contato');
    }

    public function comentar(){
        return view('comentar');
    }

    public function sucesso(){
        return view('sucesso');
    }

    public function comentar_form(Request $req){
        $post = $req->all();
        $dados['emailUsuario'] = $post['email'];
        $dados['comentario'] = $post['conteudo'];
        Comentario::create($dados);
        return redirect()->route('sucesso');
    }
}
