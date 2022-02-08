<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichaje extends Model
{
    use HasFactory;
    protected $table = "file_in";
    protected $primaryKey = 'id';
    protected $fillable = ['entry_date','departure_date','user_id','workplace_id'];

    public static function findById($id)
    {
        return Fichaje::find($id);
    }

    public static function findAll($userId)
    { 
        $fichaje = Fichaje::table('file_in')->where('user_id', $userId);
        return $fichaje;
    }

    public static function insert(array $array)
    {

        $Fichaje = Fichaje::create([
            'entry_date' => $array['entry_date'],
            'departure_date' => $array['departure_date'],
            'user_id' => $array['user_id'],
            'workplace_id' => $array['workplace_id']
        ]);
        $Fichaje -> save(); 
    }

    public function deleteFichaje($id)
    {

        $Fichaje = Fichaje::find($id);

        $Fichaje->delete();
    }
}
