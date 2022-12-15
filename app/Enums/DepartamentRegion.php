<?php

namespace App\Enums;

use App\Traits\ValuesEnum;

enum DepartamentRegion: string
{
    use ValuesEnum;

    case Caribe = 'Caribe';
    case Oriente = 'Centro Oriente';
    case Sur = 'Centro Sur';
    case Cafetero = 'Eje Cafetero - Antioquia';
    case Llano = 'Llano';
    case Pacifico = 'Pacífico';
}
