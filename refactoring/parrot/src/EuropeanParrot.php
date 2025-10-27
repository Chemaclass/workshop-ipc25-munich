<?php

namespace Parrot;

final class EuropeanParrot extends Parrot
{

    public function __construct(
 
        private int $numberOfCoconuts,
        private float $voltage,
        private bool $isNailed
    )
    {
        
        parent::__construct(ParrotTypeEnum::EUROPEAN,
          $numberOfCoconuts,
          $voltage,
          $isNailed
        );

    }

}
