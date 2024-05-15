<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eleve;

class Club extends Model
{
    
    use HasFactory;
    
    public function eleves() 
    {
        return $this->hasMany(Eleve::class, 'club_id');
    }
    
}