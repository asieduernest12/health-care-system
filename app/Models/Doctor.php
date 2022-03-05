<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'about_doctor',
        'charge',
        'experience',
        'user_id',
        'specialist_id',
        'created_by_id',
        'updated_by_id',
    ];

    public function specialist(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class, 'specialist_id', 'id');
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
