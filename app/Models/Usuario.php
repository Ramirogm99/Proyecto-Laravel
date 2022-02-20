<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'email'];

    public static function findById($id)
    {
        return Usuario::find($id);
    }

    public static function findAll()
    {
        return Usuario::all();
    }

    public static function insert(array $array)
    {

        $Usuario = Usuario::create([
            'name' => $array['name'],
            'surname' =>$array['surname'],
            'email' => $array['email']
        ]);
        $Usuario -> save();
    }

    public function deleteUsuario($id)
    {

        $Usuario = Usuario::find($id);

        $Usuario->delete();
    }
}
