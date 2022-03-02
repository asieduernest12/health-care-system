<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'start_time',
        'end_time',
        'status',
        'available_days',
        'note',
        'user_id',
        'created_by_id',
        'updated_by_id',
    ];
}
