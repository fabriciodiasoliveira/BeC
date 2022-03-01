<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Departamento extends Model
{
    protected $table = "departamento";
    protected $fillable = ['nome', 'loja_id'];
    public function getAllDepartamentos($id)
    {
        return Departamento::query()
                ->select('*')
                ->where('loja_id', '=', $id)
                ->get();
    }
    public function remove($id){
        Departamento::where('departamento_id', $id)->delete();
    }
    public function store(array $options = [])
    {
        return Departamento::query()->insertGetId($options);
    }
    public function getDepartamento($id)
    {
        return Departamento::query()->select('*')->where('departamento_id', '=', $id)->first();
    }
    public function updateWingoutModel($id, Array $options)
    {
        Departamento::query()->where('departamento_id', '=', $id)->update($options);
    }
}
