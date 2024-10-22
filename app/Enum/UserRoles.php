<?php

namespace App\Enum;

enum UserRoles: string
{
    case Admin = 'admin';
    case Editor = 'editor';
    case Support = 'support';
    case Client = 'client';
    case Inactive = 'inactive';
}
