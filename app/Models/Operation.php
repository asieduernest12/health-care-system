<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

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
