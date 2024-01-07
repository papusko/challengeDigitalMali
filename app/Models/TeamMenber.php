<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMenber extends Model
{
    use HasFactory;

    protected $table = 'teamsmenber';

    protected $fillable = [
        'user_id',
        'team_id',
        'role_in_team'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
