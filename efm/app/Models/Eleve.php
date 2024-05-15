<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Club;
use App\Models\Activite;

class Eleve extends Model
{
    use HasFactory;

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function activites(): BelongsToMany
    {
        return $this->belongsToMany(Activite::class, 'eleve_activite');
    }
}