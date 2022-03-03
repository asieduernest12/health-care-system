<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationType extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'name',
        'status',
        'patient_id',
        'user_id',
    ];
}
