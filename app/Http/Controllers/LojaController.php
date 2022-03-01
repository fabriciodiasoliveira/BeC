<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class LojaController extends Controller
{
    private $model_loja;
    function __construct() {
        $this->model_loja = new Loja();
    }
    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'lat' => $request['lat'],
            'longt' => $request['longt'],
        ];
        return $data;
    }
    public function index()
    {
        $lojas = $this->model_loja->getAllLojas();
        return view('loja.index', compact('lojas'));
    }
    public function create()
    {
        return view('loja.create');
    }
    public function store(Request $request)
    {
        $this->model_loja->store($this->setData($request));
        return redirect(route('lojas'))->with('success', 'Loja adicionada com sucesso');
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}
