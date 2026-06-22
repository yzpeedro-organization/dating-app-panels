<?php

namespace App\Enums;

use App\Traits\EnumCaseHelper;
use App\Traits\EnumHelper;

enum GenderEnum: string
{
    use EnumCaseHelper;
    use EnumHelper;

    case MAN = 'man';
    case WOMAN = 'woman';
    case NON_BINARY = 'non_binary';
    case PREFER_NOT_TO_SAY = 'prefer_not_to_say';
    case OTHER = 'other';
}
