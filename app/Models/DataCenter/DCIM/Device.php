<?php

namespace App\Models\DataCenter\DCIM;

use App\Models\DataCenter\Dcim\Interfaces\DeviceInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];

    public function device_interfaces()
    {
        return $this->hasMany(DeviceInterface::class);
    }
}
