<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_at',
        'pet_id',
        'vaccine_name',
        'veterinarian',
        'notes'
    ];
}
