<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Produto extends Model
{
    protected $table = "produto";
    protected $fillable = ['nome', 'preco', 'loja_id', 'departamento_id'];
    public function getAllProdutos()
    {
        return Produto::query()->select('*')->get();
    }
    public function remove($id){
        Produto::destroy($id);
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
