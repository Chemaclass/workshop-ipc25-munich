<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class Parrot
{
    private ParrotDTO $dto;
    public function __construct(
        ParrotDTO $dto
    ) {
        $this->dto = $dto;
    }

    /**
     * @throws Exception
     */
    public function getSpeed(): float
    {
        return match ($this->dto->type) {
            ParrotTypeEnum::EUROPEAN => $this->getBaseSpeed(),
            ParrotTypeEnum::AFRICAN => max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->dto->numberOfCoconuts),
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->dto->isNailed ? 0 : $this->getBaseSpeedWith($this->dto->voltage),
            default => throw new Exception('Should be unreachable'),
        };
    }

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return match ($this->dto->type) {
            ParrotTypeEnum::EUROPEAN => 'Sqoork!',
            ParrotTypeEnum::AFRICAN => 'Sqaark!',
            ParrotTypeEnum::NORWEGIAN_BLUE => $this->dto->voltage > 0 ? 'Bzzzzzz' : '...',
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
}
