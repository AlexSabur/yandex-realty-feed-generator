<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class Category
 * @package Windstep\YRLGenerator\Enums
 * @method static HOUSE()
 * @method static FLAT()
 * @method static TOWNHOUSE()
 * @method static LOT()
 * @method static HOUSE_WITH_LOT()
 */
class Category extends Enum
{
    private const HOUSE = 'дом';
    private const FLAT = 'квартира';
    private const TOWNHOUSE = 'таунхаус';
    private const LOT = 'участок';
    private const HOUSE_WITH_LOT = 'дом с участком';
}
