<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum SubsidiaryType: string
{
    use ValuesEnum;

    case Principal = 'Principal';
    case Subsede = 'Subsede';
}
