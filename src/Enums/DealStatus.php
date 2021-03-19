<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class DealStatus
 * @package Windstep\YRLGenerator\Enums
 * @method static static PRIMARY()
 * @method static static DIRECT()
 * @method static static REASSIGNMENT()
 */
class DealStatus extends Enum
{
    private const PRIMARY = 'первичная продажа';
    private const DIRECT = 'прямая продажа';
    private const REASSIGNMENT = 'переуступка';
}
