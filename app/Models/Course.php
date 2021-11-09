<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = "cursos";

    // CONST STATUS_SOLD = 'Sold';
    // CONST STATUS_CART = 'Cart';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'duracion',
        'costo'
    ];



}
