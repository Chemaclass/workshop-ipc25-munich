<?php

namespace Parrot;

final class UnknownParrot extends Parrot
{

    public function __construct(
 
        private int $numberOfCoconuts,
        private float $voltage,
        private bool $isNailed
    )
    {
        
        parent::__construct(ParrotTypeEnum::UNKNOWN,
          $numberOfCoconuts,
          $voltage,
          $isNailed
        );

    }

}
