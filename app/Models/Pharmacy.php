<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'address',
        'status',
        'branch_id',
        'created_by_id',
        'updated_by_id',
    ];
}
