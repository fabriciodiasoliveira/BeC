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
        $loja = $this->model_loja->getLoja($id);
        return response()->json($loja);
    }
    public function edit($id)
    {
        $loja = $this->model_loja->getLoja($id);
        return view('loja.edit', compact('loja'));
    }
    public function update(Request $request, $id)
    {
        $this->model_loja->updateWingoutModel($id,$this->setData($request));
        return redirect(route('lojas'))->with('success', 'Loja modificada com sucesso');   
    }
    public function destroy($id)
    {
        $this->model_loja->remove($id);
        return redirect(route('lojas'))->with('info', 'Loja eliminada com sucesso'); 
    }
}
