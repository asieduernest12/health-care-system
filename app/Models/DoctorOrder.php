<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorOrder extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'order_no',
        'order_type',
        'status',
        'patient_visit_id',
        'user_id',
        'approved_by_id',
        'created_by_id',
        'updated_by_id',
    ];

    public function patient_visit(): HasMany
    {
        return $this->hasMany(PatientVisit::class, 'patient_visit_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by_id', 'id');
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
