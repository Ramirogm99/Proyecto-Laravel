<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelCentro extends Model
{
    protected $table = "centros";
    protected $primaryKey = 'id';
    protected $fillable = ('name','created_at','updated_at');


    public function obtenerCentroPorCodigo($id){
        return modelCentro::find($id);
    }
}
