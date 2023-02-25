<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TagTypeEnum extends Enum
{
    public const  FOOD    = 1;
    public const  BLOG    = 2;
    public const  WORKOUT = 3;

    public static function getArrayView(): array
    {
        return [
            self::FOOD    => 'Thực phẩm',
            self::BLOG    => 'Bài viết',
            self::WORKOUT => 'Bài tập',
        ];
    }

    public static function getValueViewByKey($key): string
    {
        return self::getArrayView()[$key];
    }
}
