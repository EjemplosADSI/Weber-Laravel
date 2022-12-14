<?php

namespace App\Enums;
use App\Traits\ValuesEnum;

enum BusineStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
