<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'about_doctor',
        'charge',
        'experience',
        'user_id',
        'specialist_id',
        'created_by_id',
        'updated_by_id',
    ];
}
