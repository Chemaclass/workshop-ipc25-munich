<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class NorwegianBlueParrot extends Parrot
{

    public const BASE_SPEED_FACTOR = 24.0;
    private float $voltage;
    private bool $isNailed;

    public function __construct(float $voltage, bool $isNailed)
    {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    /**
     * @throws Exception
     */
    public function getSpeed(): float
    {
        return $this->isNailed ? 0 : $this->getBaseSpeedWithVoltage($this->voltage);
    }

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return $this->voltage > 0 ? 'Bzzzzzz' : '...';
    }

    private function getBaseSpeedWithVoltage(float $voltage): float
    {
        return min(self::BASE_SPEED_FACTOR, $voltage * self::BASE_SPEED);
    }
}
