<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class BuildingState
 * 
 * 
 * 
 * @method static static BUILT()
 * @method static static HAND_OVER()
 * @method static static UNFINISHED()
 */
class BuildingState extends Enum
{
    private const BUILT = 'built'; // построен, не сдан
    private const HAND_OVER = 'hand-over'; // сдан
    private const UNFINISHED = 'unfinished'; // строится
}
