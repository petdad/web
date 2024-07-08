<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
        'created_at',
        'updated_at'
    ];

    public function controllers()
    {
        return $this->hasMany(Controller::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
