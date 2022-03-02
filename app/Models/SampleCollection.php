<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleCollection extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'sample_code',
        'collect_date',
        'dispatch_date',
        'cancel_dispatch_date',
        'status',
        'investigation_id',
        'laboratory_id',
        'created_by_id',
        'updated_by_id',
    ];
}
