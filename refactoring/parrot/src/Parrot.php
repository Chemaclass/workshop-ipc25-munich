<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class Parrot
{
    public const LOAD_FACTOR = 9.0;
    public const BASE_SPEED = 12.0;
    public const BASE_SPEED_FACTOR = 24.0;


    public function __construct(
        private ParrotTypeEnum $type,
        private int $numberOfCoconuts,
        private float $voltage,
        private bool $isNailed
    ) {
    }

    /**
     * @throws Exception
     */
    public function getSpeed(): float
    {
        return match ($this->type) {
            ParrotTypeEnum::EUROPEAN => self::BASE_SPEED,
            ParrotTypeEnum::AFRICAN => max(0, self::BASE_SPEED - self::LOAD_FACTOR * $this->numberOfCoconuts),
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->isNailed ? 0 : $this->getBaseSpeedWithVoltage($this->voltage),
        };
    }

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
