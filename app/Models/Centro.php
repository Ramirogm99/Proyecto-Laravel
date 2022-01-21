<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $table = "workplaces";
    protected $primaryKey = 'id';
    protected $fillable = ['name'];


   public function obtenerCentroPorCodigo($id){
        return Centro::find($id);
    }
}
