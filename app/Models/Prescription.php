<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'dosage',
        'frequency',
        'duration',
        'food_relation',
        'route',
        'instruction',
        'status',
        'patient',
        'patient_id',
        'patient_visit_id',
    ];
}
