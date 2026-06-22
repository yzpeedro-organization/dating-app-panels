<?php

namespace App\Enums;

use App\Traits\EnumHelper;
use App\Traits\EnumCaseHelper;

enum LookingForEnum: string
{
    use EnumCaseHelper;
    use EnumHelper;

    case SERIOUS_RELATIONSHIP = 'serious_relationship';
    case CASUAL_DATING = 'casual_dating';
    case FRIENDSHIP = 'friendship';
    case NOT_SURE_YET = 'not_sure_yet';
}
