<?php

namespace App\Traits;

trait ValuesEnum
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
