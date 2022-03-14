<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'code',
        'name',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
