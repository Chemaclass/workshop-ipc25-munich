<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

abstract class Parrot
{
    protected ParrotDTO $dto;

    public function __construct(ParrotDTO $dto) {
        $this->dto = $dto;
    }

    /**
     * @throws Exception
     */
//    public abstract function _getSpeed(): float
//    {
//        return match ($this->dto->type) {
//            ParrotTypeEnum::NORWEGIAN_BLUE => $this->dto->isNailed ? 0 : $this->getBaseSpeedWith($this->dto->voltage),
//            default => throw new Exception('Should be unreachable'),
//        };
//    }
    public abstract function getSpeed(): float;
    public abstract function getCry(): float;
    /**
     * @throws Exception
     */
//    public function getCry(): string
//    {
//        return match ($this->dto->type) {

//            ParrotTypeEnum::NORWEGIAN_BLUE => $this->dto->voltage > 0 ? 'Bzzzzzz' : '...',
//            default => throw new Exception('Should be unreachable'),
//        };
//    }

    public function getBaseSpeed(): float
    {
        return 12.0;
    }
}
