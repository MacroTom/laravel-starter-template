<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    protected $fillable = [
        'country',
        'code',
        'name',
    ];
}
