<?php

namespace App\Models;

use App\Http\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'room_no',
        'name',
        'price',
        'capacity',
        'status',
        'image',
        'ward_id',
        'room_type_id',
        'created_by_id',
        'updated_by_id',
    ];

    public function ward(): BelongsTo
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    public function room_type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
