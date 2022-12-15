<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum ProductStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
