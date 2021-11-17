<?php

namespace App\Models;

use App\Models\Apply;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    CONST STATUS_FALSE = false;
    CONST STATUS_TRUE = true;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'gender',
        'birthday',
        'nationality',
        'address',
        'salary',
        'nif',
        'status',
        'signature'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $date = [
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function editions () {
        return $this->hasMany(Edition::class);
    }

    public function applications () {
        return $this->hasMany(Apply::class);
    }
}
