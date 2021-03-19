<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class BuildingType
 * 
 * 
 * 
 * @method static static BRICK()
 * @method static static MONOLITH()
 * @method static static PANEL()
 * @method static static MONOLITH_BRICK()
 * @method static static WOOD()
 * @method static static BLOCK()
 */
class BuildingType extends Enum
{
    private const BRICK = 'кирпичный';
    private const MONOLITH = 'монолит';
    private const PANEL = 'панельный';
    private const MONOLITH_BRICK = 'кирпично-монолитный';
    private const WOOD = 'деревянный';
    private const BLOCK = 'блочный';
}
