<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

//    protected $guarded = [];

    protected $fillable = ['name', 'url', 'icon', 'description', 'category_id'];

    public function software_category()
    {
        return $this->belongsTo(SoftwareCategory::class);
    }
}
