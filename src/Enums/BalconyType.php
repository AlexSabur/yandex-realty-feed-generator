<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class BalconyType.
 *
 * Тип балкона
 *
 * @method static static BALCONY()
 * @method static static LOGGIA()
 * @method static static BALCONIES()
 * @method static static LOGGIAS()
 */
class BalconyType extends Enum
{
    private const BALCONY = 'балкон';
    private const LOGGIA = 'лоджия';
    private const BALCONIES = 'балкона';
    private const LOGGIAS = 'лоджии';
}
