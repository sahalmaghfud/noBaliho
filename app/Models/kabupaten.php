<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kabupaten extends Model
{
    use HasFactory;
    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(kabupaten::class);
    }
    public function walikotas(): HasMany
    {
        return $this->hasMany(walikota::class, 'idkab');
    }
}
