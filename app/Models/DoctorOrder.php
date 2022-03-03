<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOrder extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'order_no',
        'order_type',
        'status',
        'patient_visit_id',
        'user_id',
        'created_by_id',
        'updated_by_id',
    ];
}
