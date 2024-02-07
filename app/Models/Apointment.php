<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apointment extends Model
{
    use HasFactory;
    protected $table = 'apointments';

    protected $fillable = [
        'title',
        'description',
        'date',
        'startHours',
        'endHours',
        'state',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function telepro(){
        return $this->belongsTo(Telepro::class);
    }
}
