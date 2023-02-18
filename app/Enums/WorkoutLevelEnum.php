<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class WorkoutLevelEnum extends Enum
{
    public const  EASY   = 0;
    public const  MEDIUM = 1;
    public const  HARD   = 2;

    public static function getArrayView(): array
    {
        return [
            self::EASY   => 'Dễ',
            self::MEDIUM => 'Trung bình',
            self::HARD   => 'Khó',
        ];
    }

    public static function getValueViewByKey($key): string
    {
        return self::getArrayView()[$key];
    }
}
