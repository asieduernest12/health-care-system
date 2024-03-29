<?php

namespace App\Models;

use App\Http\Traits\UpdatableAndCreateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalSettings extends Model
{
    use HasFactory;
    use UpdatableAndCreateable;

    protected $fillable = [
        'name',
        'website',
        'phone',
        'fax',
        'country',
        'address',
        'establish',
        'email',
        'logo',
        'favicon',
        'size',
        'type',
        'facebook',
        'twitter',
        'whatsapp',
        'instagram',
        'driver',
        'encryption',
        'host',
        'port',
        'username',
        'email_from',
        'email_from_name',
        'invoice_prefix',
        'invoice_logo',
        'user_prefix',
        'patient_prefix',
        'invoice_number_mood',
        'invoice_last_number',
        'taxes',
        'discount',
    ];
}
