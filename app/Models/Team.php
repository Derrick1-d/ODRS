<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['team_name', 'members'];

    protected $casts = [
        'members' => 'array',
    ];

    public function fireIncidents()
    {
        return $this->belongsToMany(FireIncident::class, 'team_fire_incident');
    }
}
