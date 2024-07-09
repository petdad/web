<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controller extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'is_active',
        'space_id',
        'description',
        'created_at',
        'updated_at'
    ];
    public function devices()
    {
        return $this->hasMany(ControllerDevice::class);
    }

    public function networkAdapters()
    {
        return $this->hasMany(ControllerNetworkAdapter::class);
    }
}
