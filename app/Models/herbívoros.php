<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herbívoros extends Model
{
    use HasFactory;
    protected $table = 'herbívoros';

    protected $fillable = ['Nombre','Nombre_C','Habitat','Alimento'];
}
