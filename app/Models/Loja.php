<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Loja extends Model
{
    protected $table = "loja";
    protected $fillable = ['nome', 'lat', 'longt'];
    public function getAllLojas()
    {
        return Loja::query()->select('*')->get();
    }
    public function remove($id){
        Loja::destroy($id);
    }
    public function store(array $options = [])
    {
        return Loja::query()->insertGetId($options);
    }
    public function getLoja($id)
    {
        return Loja::query()->select('*')->where('loja_id', '=', $id)->first();
    }
    public function updateWingoutModel($id, Array $options)
    {
        Loja::query()->where('loja_id', '=', $id)->update($options);
    }
}
