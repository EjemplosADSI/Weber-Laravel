<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum UserGender: string
{
    use ValuesEnum;

    case FEMENINO = 'Femenino';
    case MASCULINO = 'Masculino';
    case OTRO = 'Otro';
}
