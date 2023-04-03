<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NOT_DONE()
 * @method static static DONE()
 */
final class TrainingStatusEnum extends Enum
{
    const NOT_DONE = 0;
    const DONE = 1;
}
