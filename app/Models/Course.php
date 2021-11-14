<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $table = "courses";

    // CONST STATUS_SOLD = 'Sold';
    // CONST STATUS_CART = 'Cart';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'duracion',
        'costo',
        'course_id'
    ];



}
