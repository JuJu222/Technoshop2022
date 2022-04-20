<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'team_id', 'start_at', 'finish_at'];

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function team() {
        return $this->belongsToMany(Team::class);
    }
}
