<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'room_no',
        'name',
        'price',
        'capacity',
        'status',
        'image',
        'room_type_id',
        'created_by_id',
        'updated_by_id',
    ];
}
