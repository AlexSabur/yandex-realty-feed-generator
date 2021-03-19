<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class RoomType
 * 
 * 
 * 
 * @method static static ADJACENT()
 * @method static static SEPARATED()
 */
class RoomType extends Enum
{
    private const ADJACENT = 'смежные';
    private const SEPARATED = 'раздельные';
}
