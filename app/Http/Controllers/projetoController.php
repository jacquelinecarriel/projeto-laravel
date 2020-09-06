<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projetoController extends Controller
{
    public function listarProduto(){
       $produto = projetoModel::paginate(5);
       return view('homeprojeto', ["produto"=>$produto]);
    }
    //public function verProduto($id){
        //$produto = projetoModel::find($id);
       //return view('verproduto', ["produto"=>$produto]);
    //}
    //public function cadastrarUsuario(Request $request){
       //if ($request->isMethod('GET')){
            //return view ('cadastrarusuario');
        //}

        //$novoUsuario = new projetoModel();
        //$novoUsuario->nome = $request->nome;
        //$novoUsuario->nascimento = $request->nascimento;
        //$novoUsuario->email = $request->email;
        //$novoUsuario->cpf = $request->cpf;
        //$novoUsuario->celular = $request->celular;
        //$novoUsuario->senha = $request->senha;
        //$novoUsuario = $novoFilme->save();

        //return view ("cadastrarusuario", ['resultado'=>$resultado]);

    //}
    
}