<?php

namespace App\Models\MasterData;

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
