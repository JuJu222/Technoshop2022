<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    use HasFactory;

    protected $fillable = ['points'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function point() {
        return $this->hasMany(Point::class);
    }
}
