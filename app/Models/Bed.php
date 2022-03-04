<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bed extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'bed_no',
        'name',
        'price',
        'status',
        'image',
        'bed_type_id',
        'room_id',
        'created_by_id',
        'updated_by_id',
    ];

    // Relationship for the user model
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
