<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class Unit
 * @package Windstep\YRLGenerator\Enums
 * @method static METER_SQUARE
 * @method static AR
 * @method static HECTARE
 */
class Unit extends Enum
{
    private const METER_SQUARE = 'кв. м';
    private const AR = 'сотка';
    private const HECTARE = 'гектар';
}
