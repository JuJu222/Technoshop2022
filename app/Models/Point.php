<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['judge_id', 'team_id', 'prototype', 'idea', 'investment'];

    public function judge() {
        return $this->belongsToMany(Judge::class);
    }

    public function team() {
        return $this->belongsToMany(Team::class);
    }
}
