<?php

namespace App\Models;

use App\Http\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advice extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'name',
        'ot_required',
        'result',
        'status',
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
