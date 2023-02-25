<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class WorkoutLevelEnum extends Enum
{
    public const  EASY   = 1;
    public const  MEDIUM = 2;
    public const  HARD   = 3;

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
