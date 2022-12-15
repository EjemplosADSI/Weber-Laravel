<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum SubsidiaryStatus: string
{
    use ValuesEnum;

    case Activo = 'Activo';
    case Inactivo = 'Inactivo';
}
