<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FireIncident extends Model
{
    protected $fillable = ['name', 'mobile_number', 'gps_address', 'description', 'status', 'remarks'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_fire_incident');
    }
}

