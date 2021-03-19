<?php

namespace Windstep\YRLGenerator\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class SalesAgentCategory
 * 
 * 
 * 
 * @method static static AGENCY()
 * @method static static DEVELOPER()
 * @method static static OWNER()
 */
class SalesAgentCategory extends Enum
{
    private const AGENCY = 'агентство';
    private const DEVELOPER = 'застройщик';
    private const OWNER = 'владелец';
}
