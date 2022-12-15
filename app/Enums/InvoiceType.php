<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum InvoiceType: string
{
    use ValuesEnum;

    case Venta = 'Venta';
    case Compra = 'Compra';
}
