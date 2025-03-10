<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

public function courses() {
    return $this->belongsToMany(Course::class);
}

public function users() {
    return $this->hasMany(User::class);
}

class Group extends Model
{
    use HasFactory;
}
