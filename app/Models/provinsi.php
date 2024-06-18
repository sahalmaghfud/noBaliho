<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class provinsi extends Model
{
    public function gubernurs(): HasMany
    {
        return $this->hasMany(gubernur::class, 'idprovinsi');
    }
    public function kabupatens(): HasMany
    {
        return $this->hasMany(kabupaten::class, 'idprovinsi');
    }
    use HasFactory;
}
