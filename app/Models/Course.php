<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

public function roboticsKit() {
    return $this->belongsTo(RoboticsKit::class, 'robotics_kit_id');
}

class Course extends Model
{
    use HasFactory;
}
