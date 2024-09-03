<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Produto;



class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')-> with('produtos', $produtos);
    }

    public function mostra($id) {
        $produtos = Produto::find($id);
        if(empty($produtos)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produtos);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona(Request $request) {
        $params = $request->all();
        Produto::create($params);

        return redirect()
            ->action([ProdutoController::class, 'lista'])
            ->withInput($request->only('nome'));
    }

    public function listaJson() {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id){
        $produtos = Produto::find($id);
        $produtos->delete();

        return redirect()
            ->action([ProdutoController::class, 'lista']);
    }

    public function edita($id)
    {
        $produto = Produto::find($id);
        return view('produto.edita', compact('produto'));
    }

    public function altera(Request $request, $id) {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return redirect('/produtos')->withInput($request->only('nome'));
    }
}
