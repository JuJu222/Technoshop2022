<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['mentors', 'members'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function point() {
        return $this->hasMany(Point::class);
    }

    public function game() {
        return $this->hasMany(Game::class);
    }
}
