<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carnivoros extends Model
{
    use HasFactory;
    protected $table = 'carnivoros';

    protected $fillable = ['Nombre','Nombre_C','Habitat','Alimento'];
   
}
