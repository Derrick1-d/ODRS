<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'fire_incident_id',
    ];
}
