<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Loja;

class DepartamentoController extends Controller
{
    private $model_departamento;
    private $model_loja;
    function __construct() {
        $this->model_departamento = new Departamento();
        $this->model_loja = new Loja();
    }
    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'loja_id' => $request['loja_id'],
        ];
        return $data;
    }
    public function index($id)
    {
        $departamentos = $this->model_departamento->getAllDepartamentos($id);
        $loja = $this->model_loja->getLoja($id);
        return view('departamento.index', compact('departamentos', 'loja'));
    }
    public function create($id)
    {
        $loja = $this->model_loja->getLoja($id);
        return view('departamento.create', compact('loja'));
    }
    public function store(Request $request)
    {
        $this->model_departamento->store($this->setData($request));
        return redirect(route('departamentos', $request['loja_id']))->with('success', 'Departamento adicionada com sucesso');
    }
    public function show($id)
    {
        $departamento = $this->model_departamento->getDepartamento($id);
        return response()->json($departamento);
    }
    public function edit($id)
    {
        $departamento = $this->model_departamento->getDepartamento($id);
        return view('departamento.edit', compact('departamento'));
    }
    public function update(Request $request, $id)
    {
        $this->model_departamento->updateWingoutModel($id,$this->setData($request));
        return redirect(route('departamentos', $request['loja_id']))->with('success', 'Departamento modificado com sucesso');   
    }
    public function destroy($id)
    {
        $departamento = $this->model_departamento->getDepartamento($id);
        $this->model_departamento->remove($id);
        return redirect(route('departamentos', $departamento->loja_id))->with('info', 'Departamento eliminado com sucesso'); 
    }
}
