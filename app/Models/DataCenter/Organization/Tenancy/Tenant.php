<?php

namespace App\Models\DataCenter\Organization\Tenancy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];

    public function tenant_group()
    {
        return $this->belongsTo(TenantGroup::class);
    }
}
