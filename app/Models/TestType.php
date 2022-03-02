<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'name',
        'price',
        'discount',
        'created_by_id',
        'updated_by_id',
    ];
}
