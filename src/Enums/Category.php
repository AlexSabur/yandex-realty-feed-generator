<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class Category.
 *
 *
 *
 * @method static static HOUSE()
 * @method static static FLAT()
 * @method static static TOWNHOUSE()
 * @method static static LOT()
 * @method static static HOUSE_WITH_LOT()
 */
class Category extends Enum
{
    private const HOUSE = 'дом';
    private const FLAT = 'квартира';
    private const TOWNHOUSE = 'таунхаус';
    private const LOT = 'участок';
    private const HOUSE_WITH_LOT = 'дом с участком';
}
