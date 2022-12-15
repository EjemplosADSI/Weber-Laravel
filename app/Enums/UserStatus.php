<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum UserStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
