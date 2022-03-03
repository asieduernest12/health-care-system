<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'operation_date',
        'operation_item',
        'amount',
        'description',
        'status',
        'operation_type_id',
        'patient_id',
        'user_id',
        'created_by_id',
        'updated_by_id',
    ];
}
