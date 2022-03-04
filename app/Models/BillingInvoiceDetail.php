<?php

namespace App\Models;

use App\Http\Jambas\Traits\updatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInvoiceDetail extends Model
{
    use HasFactory;
    use updatableAndCreateable;

    protected $fillable = [
        'item_amount',
        'item_total_amount',
        'billing_invoice_id',
        'created_by_id',
        'updated_by_id',
    ];
}
