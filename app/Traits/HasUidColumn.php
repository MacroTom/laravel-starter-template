<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUidColumn
{
    protected $hasUidColumn = true;

    protected $uidColumnName = 'uid';

    public static function bootHasUidColumn()
    {
        static::creating(function (self $model) {
            if ($model->hasUidColumn) {
                $model->attributes[$model->uidColumnName] = Str::uuid();
            }
        });
    }
}
