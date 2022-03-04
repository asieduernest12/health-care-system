<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'blood_type',
        'status',
        'patient_id',
        'user_id',
        'created_by_id',
        'updated_by_id',
    ];
}
