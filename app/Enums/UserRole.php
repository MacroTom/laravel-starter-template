<?php

namespace App\Enums;

enum UserRole: string
{
    case SuperAdmin = 'super admin';
    case Admin = 'admin';
    case User = 'user';
}
