<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Telepro extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'telepro';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone_number',
        'poste',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function apointmens()
    {
        return $this->hasMany(apointment::class);
    }
}
