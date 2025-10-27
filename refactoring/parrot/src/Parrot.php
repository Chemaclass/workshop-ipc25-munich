<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class Parrot
{
    public const BASE_SPEED = 12.0;

    abstract public function getSpeed(): float

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return match ($this->type) {
            ParrotTypeEnum::EUROPEAN => 'Sqoork!',
            ParrotTypeEnum::AFRICAN => 'Sqaark!',
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->voltage > 0 ? 'Bzzzzzz' : '...'
        };
    }

    private function getBaseSpeedWithVoltage(float $voltage): float
    {
        return min(self::BASE_SPEED_FACTOR, $voltage * self::BASE_SPEED);
    }
}
