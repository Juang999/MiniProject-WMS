<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Factories\HasFactory};

class MasterProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'slug',
    ];
}
