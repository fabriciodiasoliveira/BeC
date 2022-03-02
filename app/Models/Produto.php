<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Produto extends Model
{
    protected $table = "produto";
    protected $fillable = ['nome', 'preco', 'loja_id', 'departamento_id'];
    public function getAllProdutos($id)
    {
        $produtos = Produto::query()
                ->select('*')
                ->where('departamento_id', '=', $id)
                ->get();
        $produtos_formatados = array();
        foreach($produtos as $produto){
            $produto->preco = 'R$'.number_format($produto->preco, 2, ',','');
            array_push($produtos_formatados, $produto);
        }
        return $produtos_formatados;
    }
    public function remove($id){
        Produto::where('produto_id', $id)->delete();
    }
    public function store(array $options = [])
    {
        return Produto::query()->insertGetId($options);
    }
    public function getProduto($id)
    {
        return Produto::query()->select('*')->where('produto_id', '=', $id)->first();
    }
    public function updateWingoutModel($id, Array $options)
    {
        Produto::query()->where('produto_id', '=', $id)->update($options);
    }
}
