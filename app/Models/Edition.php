<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;
    public $table = "editions";

    protected $fillable = [
        'id',
        'fecha_inicio',
        'fecha_fin',
        'horario',
        'direccion',
        'course_id',
        'teacher_id'
    ];



}
