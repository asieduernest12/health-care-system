<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingTransaction extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'payment_amount',
        'status',
        'patient_visit_id',
        'billing_invoice_id',
        'created_by_id',
        'updated_by_id',
    ];
}
