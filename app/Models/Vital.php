<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'systolic_B_P',
        'diastolic_B_P',
        'temperature',
        'weight',
        'height',
        'bmi',
        'respiratory',
        'heart_rate',
        'urine_output',
        'blood_sugar_f',
        'bloog_sugar_r',
        'spo_2',
        'avpu',
        'trauma',
        'mobility',
        'oxygen_supplementation',
        'comment',
        'patient_id',
        'patient_visit_id',
        'user_id', // Doctor's id
        'created_by_id',
        'updated_by_id',
    ];
}
