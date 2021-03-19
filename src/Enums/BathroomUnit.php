<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class BathroomUnit
 * 
 * Тип вынной комнаты
 * 
 * @method static static ADJASTED()
 * @method static static SEPARATED()
 */
class BathroomUnit extends Enum
{
    private const ADJASTED = 'совмещенный';
    private const SEPARATED = 'раздельный';
}
