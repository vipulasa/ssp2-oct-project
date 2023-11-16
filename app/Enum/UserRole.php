<?php

namespace App\Enum;

/**
 * Class UserRole
 * @package App\Enum
 */
enum UserRole : int
{
    case Admin = 1;

    case Doctor = 2;

    case Customer = 3;

}
