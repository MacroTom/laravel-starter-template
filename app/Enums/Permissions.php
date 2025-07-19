<?php

namespace App\Enums;

enum Permissions: string
{
    case ViewTransactions = 'view transactions';
    case ViewSettings = 'view settings';
    case UpdateSettings = 'update settings';

    public static function toArray(): array
    {
        return array_map(fn ($permission) => $permission->value, self::cases());
    }
}
