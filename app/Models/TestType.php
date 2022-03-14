<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'name',
        'price',
        'discount',
        'created_by_id',
        'updated_by_id',
    ];
}
