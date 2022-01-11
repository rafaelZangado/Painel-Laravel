<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class TabelaController extends Controller {
    public function cadastrar() {
        return view('cadastrar');

    }

    public function salvar(Request $request) {      
        DB::table('tabela')->insert([
            'nome'=>$request->nome,
            'idade'=>$request->idade,
        ]);

        return back()->with('post_add', 'SUCESSO AO CADASTRAR ');
    }

    public function listar() {
        $listar = DB::table('tabela')->get();
        return view('listar', compact('listar'));
    }
    public function editar($id) {
        $editar = DB::table('tabela')->where('id', $id)->first();
        return view('editar', compact('editar'));
    }
    public function atualizar(Request $request) {
        DB::table('tabela')->where('id', $request->id)->update([
            'nome'=>$request->nome,
            'idade'=>$request->idade
        ]);
        return back()->with('atualizar', 'EDITADO COM SUCESSO');
    }


    public function deletar($id) {
        DB::table('tabela')->where('id', $id)->delete();
        
     
    }
}

