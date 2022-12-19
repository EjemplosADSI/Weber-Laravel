<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum UserRole: string
{
    use ValuesEnum;

    case Administrador = 'Administrador';
    case Empleado = 'Empleado';
    case Cliente = 'Cliente';
    case Proveedor = 'Proveedor';
}
