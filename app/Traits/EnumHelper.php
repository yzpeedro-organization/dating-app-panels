<?php

namespace App\Traits;

trait EnumHelper
{
    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public static function labels(): array
    {
        return array_map(fn($case) => $case->label(), self::cases());
    }

    public static function all(): array
    {
        return array_combine(self::values(), self::labels());
    }
}
