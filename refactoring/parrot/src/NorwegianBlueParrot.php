<?php

namespace Parrot;

final class NorwegianBlueParrot extends Parrot
{

    public function __construct(
 
        private int $numberOfCoconuts,
        private float $voltage,
        private bool $isNailed
    )
    {
        
        parent::__construct(ParrotTypeEnum::NORWEGIAN_BLUE,
          $numberOfCoconuts,
          $voltage,
          $isNailed
        );

    }

}
