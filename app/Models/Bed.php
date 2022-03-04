<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'bed_no',
        'name',
        'price',
        'status',
        'image',
        'bed_type_id',
        'room_id',
        'created_by_id',
        'updated_by_id',
    ];
}
