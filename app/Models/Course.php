<?php

namespace App\Models;

use App\Models\Edition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'course_id',
        'teacher_id',
    ];

    protected $date = [
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
    ];

    public function editions () {
        return $this->hasMany(Edition::class);
    }


}
