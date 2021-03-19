<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class Type.
 *
 *
 *
 * @method static static SELL()
 * @method static static RENT()
 */
class Type extends Enum
{
    private const SELL = 'продажа';
    private const RENT = 'аренда';
}
