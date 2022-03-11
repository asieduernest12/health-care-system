<?php

namespace App\Models;

use App\Http\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'registration_no',
        'registration_date',
        'referral',
        'referred_by',
        'patient_type',
        'title',
        'name',
        'dob',
        'age',
        'gender',
        'marital_status',
        'blood_group',
        'email',
        'phone',
        'religion',
        'occupation',
        'country',
        'home_phone',
        'home_address',
        'father_name',
        'father_address',
        'father_phone',
        'mother_name',
        'mother_address',
        'mother_phone',
        'same_as_patient',
        'next_of_kin_phone',
        'next_of_kin_email',
        'next_of_kin_address',
        'payment_method',
        'symptoms',
        'image',
        'user_id',
        'created_by_id',
        'updated_by_id',
    ];

    public function doctor(): BelongsTo // User refers to a doctor at this point
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
