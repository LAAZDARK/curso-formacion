<?php

namespace App\Models;

use App\Models\User;
use App\Models\Edition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apply extends Model
{
    use HasFactory;
    public $table = "applications";

    protected $fillable = [
        'id',
        'course_id',
        'user_id'
    ];

    protected $date = [
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
    ];

    public function edition () {
        return $this->belongsTo(Edition::class);
    }
    public function user () {
        return $this->belongsTo(User::class, 'teacher_id');
    }



}
