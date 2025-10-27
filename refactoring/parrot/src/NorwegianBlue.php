<?php

namespace Parrot;

use Exception;

class NorwegianBlue extends Parrot {

    private function getBaseSpeedWith(ParrotDTO $dto): float
    {
        return min(24.0, $dto->voltage * $this->getBaseSpeed());
    }

    public function getSpeed(): float
    {
        return $this->dto->isNailed ? 0 : $this->getBaseSpeedWith($this->dto->voltage);
    }

    public function getCry(): float
    {
        return $this->dto->voltage > 0 ? 'Bzzzzzz' : '...';
    }
}
