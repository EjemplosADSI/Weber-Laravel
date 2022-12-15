<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum ProductPictureStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
