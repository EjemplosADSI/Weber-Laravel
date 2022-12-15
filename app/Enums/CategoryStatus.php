<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum CategoryStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
