<?php

namespace App\Models\DataCenter\Dcim\Interfaces;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceInterface extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];
}
