<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class walikota extends Model
{
    use HasFactory;
    public function  kabupaten(): BelongsTo
    {

        return $this->belongsTo(kabupaten::class);
    }
}
