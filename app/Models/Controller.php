<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controller extends Model
{
    use HasFactory;

    public function devices()
    {
        return $this->hasMany(ControllerDevice::class);
    }

    public function networkAdapters()
    {
        return $this->hasMany(ControllerNetworkAdapter::class);
    }
}
