<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum UserRole: string
{
    use ValuesEnum;

    case Administrador = 'Femenino';
    case Empleado = 'Empleado';
    case Cliente = 'Cliente';
    case Proveedor = 'Proveedor';
}
