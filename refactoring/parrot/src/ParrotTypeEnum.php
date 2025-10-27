<?php

declare(strict_types=1);

namespace Parrot;

Enum ParrotTypeEnum:int
{
    case EUROPEAN = 0;
    case AFRICAN = 1;
    case NORWEGIAN_BLUE = 2;
    case UNKNOWN = -1;
}
