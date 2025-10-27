<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class Parrot
{
    public const CRY_EUROPEAN = 'Sqoork!';
    public const CRY_AFRICAN = 'Sqaark!';
    public const CRY_NORWEGIAN_BLUE = 'Bzzzzzz';


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
            ParrotTypeEnum::EUROPEAN => $this->getSpeedEuropean(),
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
            ParrotTypeEnum::EUROPEAN => self::CRY_EUROPEAN,
            ParrotTypeEnum::AFRICAN => self::CRY_AFRICAN,
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->voltage > 0 ? self::CRY_NORWEGIAN_BLUE : '...',
            default => throw new Exception('Should be unreachable'),
        };
    }

    private function getBaseSpeedWith(float $voltage): float
    {
        return min(24.0, $voltage * $this->getBaseSpeed());
    }

    private function getLoadFactor(): float
    {
        return 9.0;
    }

    private function getBaseSpeed(): float
    {
        return 12.0;
    }

    private function getSpeedEuropean(): float
    {
        return $this->getBaseSpeed();
    }

    private function getSpeedAfrican(): float
    {
        return max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts);
    }

    private function getSpeedNorwegianBlue(): float
    {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }
}
