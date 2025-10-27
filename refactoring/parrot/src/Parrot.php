<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class Parrot
{
    private const float BASE_SPEED = 12.0;
    private const float LOAD_FACTOR = 9.0;
    private const float MINIMUM_VOLTAGE = 24.0;

    public function __construct(
        /**
         * @var int ParrotTypeEnum
         */
        private int $type,
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
            ParrotTypeEnum::AFRICAN => $this->getSpeedAfrican(),
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->getSpeedNorwegianBlue(),
            default => throw new Exception('Should be unreachable'),
        };
    }

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return match ($this->type) {
            ParrotTypeEnum::EUROPEAN => ParrotCryEnum::EUROPEAN,
            ParrotTypeEnum::AFRICAN => ParrotCryEnum::AFRICAN,
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->getCryNorwegianBlue(),
            default => throw new Exception('Should be unreachable'),
        };
    }

    private function getBaseSpeedWith(float $voltage): float
    {
        return min(self::MINIMUM_VOLTAGE, $voltage * self::BASE_SPEED);
    }

    private function getSpeedAfrican(): float
    {
        return max(0, self::BASE_SPEED - self::LOAD_FACTOR * $this->numberOfCoconuts);
    }

    private function getSpeedNorwegianBlue(): float
    {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }

    private function getCryNorwegianBlue(): string
    {
        return $this->voltage > 0 ? ParrotCryEnum::NORWEGIAN_BLUE_VOLT_0 : ParrotCryEnum::NORWEGIAN_BLUE_VOLT_N;
    }
}
