<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class Renovation
 * 
 * 
 * 
 * @method static static FINAL_FINISHING()
 * @method static static ABSOLUTELY_READY()
 * @method static static ROUGH_FINISHING()
 */
class Renovation extends Enum
{
    private const FINAL_FINISHING = 'чистовая отделка';
    private const ABSOLUTELY_READY = 'под ключ';
    private const ROUGH_FINISHING = 'черновая отделка';
}
