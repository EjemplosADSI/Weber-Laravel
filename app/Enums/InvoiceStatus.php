<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum InvoiceStatus: string
{
    use ValuesEnum;

    case Progreso = 'Venta';
    case Cancelada = 'Compra';
    case Finalizada = 'Finalizada';
}
