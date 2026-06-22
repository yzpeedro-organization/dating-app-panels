<?php

namespace App\Enums;

use App\Traits\EnumCaseHelper;
use App\Traits\EnumHelper;

enum UserReportType: string
{
    use EnumCaseHelper;
    use EnumHelper;

    case SPAM = 'spam';
    case FAKE_PROFILE = 'fake_profile';
    case INAPPROPRIATE_PHOTOS = 'inappropriate_photos';
    case INAPPROPRIATE_MESSAGES = 'inappropriate_messages';
    case HARASSMENT = 'harassment';
    case HATE_SPEECH = 'hate_speech';
    case UNDERAGE = 'underage';
    case SCAM = 'scam';
    case IMPERSONATION = 'impersonation';
    case VIOLENCE_OR_THREATS = 'violence_or_threats';
    case SELF_HARM = 'self_harm';
    case OTHER = 'other';
}
