<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationType extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'name',
        'status',
        'patient_id',
        'user_id',
    ];
}
