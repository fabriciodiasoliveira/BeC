<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Loja;
use App\Models\Departamento;

class ProdutoController extends Controller
{
    private $model_produto;
    private $model_loja;
    private $model_departamento;
    function __construct() {
        $this->model_produto = new Produto();
        $this->model_loja = new Loja();
        $this->model_departamento = new Departamento();
    }
    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'preco' => str_replace(',', '.', $request['preco']),
            'loja_id' => $request['loja_id'],
            'departamento_id' => $request['departamento_id'],
        ];
        return $data;
    }
    public function index($id)
    {
        $departamento = $this->model_departamento->getDepartamento($id);
        $produtos = $this->model_produto->getAllProdutos($id);
        $loja = $this->model_loja->getLoja($departamento->departamento_id);
        return view('produto.index', compact('produtos', 'loja', 'departamento'));
    }
    public function create($departamento_id)
    {
        $departamento = $this->model_departamento->getDepartamento($departamento_id);
        $loja = $this->model_loja->getLoja($departamento->loja_id);
        return view('produto.create', compact('loja', 'departamento'));
    }
    public function store(Request $request)
    {
        $this->model_produto->store($this->setData($request));
        return redirect(route('produtos', $request['departamento_id']))->with('success', 'Produto adicionado com sucesso');
    }
    public function show($id)
    {
        $produto = $this->model_produto->getProduto($id);
        return response()->json($produto);
    }
    public function edit($id)
    {
        $produto = $this->model_produto->getProduto($id);
        $departamento = $this->model_departamento->getDepartamento($produto->departamento_id);
        return view('produto.edit', compact('produto', 'departamento'));
    }
    public function update(Request $request, $id)
    {
        $this->model_produto->updateWingoutModel($id,$this->setData($request));
        return redirect(route('produtos', $request['departamento_id']))->with('success', 'Produto modificado com sucesso');   
    }
    public function destroy($id)
    {
        $produto = $this->model_produto->getProduto($id);
        $this->model_produto->remove($id);
        return redirect(route('produtos', $produto->departamento_id))->with('info', 'Produto eliminado com sucesso'); 
    }
}
