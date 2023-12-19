<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'leader_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function teamMembers()
    {
        return $this->hasMany(TeamMenber::class, 'team_id');
    }
}
