<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'phone',
        'doctor_id',
        'date',
        'remarks'
    ];

    public function specialist(){
        return $this->belongsTo(Doctor::class);
    }

    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}