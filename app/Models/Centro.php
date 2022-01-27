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


    public static function findById($id){
        return Centro::find($id);
    }

    public static function findAll(){
        return Centro::all();
    }

    public function updateCentro($id, $array){

        $Centro = Centro::find($id);

        $Centro = $array;

        $Centro -> save();

    }

    public static function insert(array $array){

        $centro = Centro::create([
            'name' => $array['name']
        ]);
       
    }

    public function deleteCentro($id){
        
        $Centro = Centro::find($id);

        $Centro->delete();

    }
}
