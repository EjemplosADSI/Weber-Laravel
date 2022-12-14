<?php

namespace App\Faker;

use Faker\Provider\Base;

class CategoryProvider extends Base
{
    protected static $names = [
        "Herramientas de mano",
        "Alicates",
        "Cepillos metálicos",
        "Cutters",
        "Destornilladores",
        "Extractores",
        "Limas y escofinas",
        "Llaves ajustables",
        "Llaves allen",
        "Llaves fijas",
        "Llaves de tubo",
        "Llaves de vaso",
        "Llaves dinamométricas",
        "Llaves estrella",
        "Maletines y kits de herramientas",
        "Martillos y mazas",
        "Portapuntas y puntas de atornillar",
        "Sierras de mano",
        "Tenazas",
        "Tijeras industriales",
        "Herramientas para tornillos especiales y de seguridad",
        "Herramientas y accesorios detectables para la industria alimentaria",
        "Otras herramientas manuales",
        "Herramientas de sujeción",
        "Bridas de sujeción",
        "Abrazaderas",
        "Arandelas",
        "Aros de seguridad",
        "Anclajes",
        "Clavijas y pasadores",
        "Insertos roscados",
        "Pernos",
        "Remaches",
        "Tacos",
        "Tornillos para madera",
        "Tornillos para metales",
        "Tornillos para plástico y PVC",
        "Tornillos y tuercas de plástico",
        "Tornillos cautivos",
        "Tornillos autoperforantes",
        "Tornillos especiales y de seguridad",
        "Tuercas",
        "Otros elementos de unión",
        "Mordazas",
        "Tornillos de apriete o sargentos",
        "Tornillos de banco",
        "Otras herramientas de sujeción",
        "Elementos de unión",
        "Herramientas para construcción e instaladores",
        "Herramientas para máquina-herramienta",
        "Herramientas para madera y carpintería",
        "Herramientas abrasivas",
        "Herramientas eléctricas y neumáticas",
        "Herramientas automotrices para jardinería",
        "Herramientas manuales para huerto y jardín",
        "Máquinas manuales para construcción y obra pública",
        "Materiales de desgaste para construcción y obra pública",
        "Medios y equipos de obra",
        "Herrajes",
        "Automatismos para puertas y ventanas",
        "Artículos de seguridad",
        "Equipamiento para soldadura",
        "Válvulas",
        "Tuberías y sus accesorios",
        "Componentes diversos",
        "Productos de fijación y sellado",
        "Pinturas, esmaltes y barnices",
        "Escaleras",
        "Equipamiento de taller",
        "Lubricantes",
        "Productos para limpieza profesional",
        "Utensilios de limpieza",
        "Productos de higiene personal",
        "Equipos de protección individual",
        "Vestuario laboral",
        "Menaje de cocina",
        "Artículos para el hogar",
        "Iluminación y alumbrado",
        "Medición dimensional",
        "Software para Ferretería y Suministro Industrial",
        "Varios ferretería",
        "Compra-venta",
        "Distribución",
    ];

    public function category(): string
    {
        return static::randomElement(static::$names);
    }
}
