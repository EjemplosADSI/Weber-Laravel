<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum UserDocumentType: string
{
    use ValuesEnum;

    case CC = 'Cédula de Ciudadanía';
    case CE = 'Cédula de Extranjería';
    case PA = 'Pasaporte';
    case RC = 'Registro Civil';
    case TI = 'Tarjeta de Identidad';
}
