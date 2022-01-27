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
}
