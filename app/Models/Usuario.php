<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = ['user', 'email', 'password'];

    public static function findById($id)
    {
        return Usuario::find($id);
    }

    public static function findAll()
    {
        return Usuario::all();
    }
}
