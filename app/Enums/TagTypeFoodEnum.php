<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TagTypeFoodEnum extends Enum
{
    public const  FISH      = 0;
    public const  VEGETABLE = 1;
    public const  PIG       = 2;
    public const  COW       = 3;
    public const  CHICKEN   = 4;

    public static function getArrayView(): array
    {
        return [
            self::FISH      => 'Cá',
            self::VEGETABLE => 'Rau củ quả',
            self::PIG       => 'Lợn',
            self::COW       => 'Bò',
            self::CHICKEN   => 'Gà',
        ];
    }

    public static function getValueViewByKey($key): string
    {
        return self::getArrayView()[$key];
    }
}
