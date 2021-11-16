<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $date = [
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
    ];

    public function course () {
        return $this->belongsTo(Course::class);
    }
    public function user () {
        return $this->belongsTo(User::class, 'teacher_id');
    }



}
