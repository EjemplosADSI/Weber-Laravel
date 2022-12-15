<?php


namespace App\Enums;

use App\Traits\ValuesEnum;

enum DepartamentStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
