<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'code',
        'name',
        'type',
        'medicine_generic_name',
        'medicine_unit',
        'medicine_strength',
        'medicine_shelf',
        'quantity',
        'quantity_type',
        'prices',
        'expiration_date',
        'note',
        'image',
        'status',
        'medicine_type_id',
        'medicine_category_id',
        'created_by_id',
        'updated_by_id',
    ];
}
