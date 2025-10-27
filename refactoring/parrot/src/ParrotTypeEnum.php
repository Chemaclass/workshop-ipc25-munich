<?php

declare(strict_types=1);

namespace Parrot;

use ECSPrefix202306\Doctrine\Common\Annotations\Annotation\Enum;

/**
 * Class ParrotTypeEnum
 *
 * @package Parrot
 */
Enum ParrotTypeEnum:int
{
    case EUROPEAN = 0;
    case AFRICAN = 1;
    case NORWEGIAN_BLUE = 2;
}
