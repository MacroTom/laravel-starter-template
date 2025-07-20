<?php

namespace App\Models;

use App\Traits\HasUidColumn;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasUidColumn;

    protected $fillable = [
        'name',
        'iso_code',
        'dial_code',
        'timezone',
        'phone_number_length',
    ];
}
