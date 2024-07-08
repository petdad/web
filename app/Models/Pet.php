<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'species',
        'dob',
        'gender',
        'vaccinated',
        'description'
    ];

    protected $casts = [
        'vaccinated' => 'boolean',
    ];
}
