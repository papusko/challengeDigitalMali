<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'is_validated',
        'leader_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }
}
