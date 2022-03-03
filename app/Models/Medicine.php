<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'medicine_code',
        'medicine_name',
        'medicine_price',
        'medicine_profit',
        'description',
        'available_qty',
        'alert_qty',
        'status',
        'purchase',
        'created_by_id',
        'updated_by_id',
    ];
}
