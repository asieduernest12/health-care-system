<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'name',
        'code',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
