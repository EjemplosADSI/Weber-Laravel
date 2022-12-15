<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum TownStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
