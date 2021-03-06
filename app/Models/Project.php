<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function skills() 
    {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }
}
