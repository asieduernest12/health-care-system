<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'reason',
        'blood_type',
        'unit',
        'status',
        'patient_id',
        'created_by_id',
        'updated_by_id',
    ];
}
