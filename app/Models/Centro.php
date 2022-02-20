<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $table = "workplaces";
    protected $primaryKey = 'id';
    protected $fillable = ['workplace_name'];


    public static function findById($id){
        return Centro::find($id);
    }

    public static function findAll(){
        return Centro::all();
    }

    public static function insert(array $array){

        $centro = Centro::create([
            'workplace_name' => $array['workplace_name']
        ]);
        $centro -> save();
       
    }

    public function deleteCentro($id){
        
        $Centro = Centro::find($id);

        $Centro->delete();

    }
}
