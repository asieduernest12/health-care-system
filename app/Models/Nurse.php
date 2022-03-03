<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'about_nurse',
        'experience',
        'user_id',
        'specialist_id',
        'created_by_id',
        'updated_by_id',
    ];
}
