<?php

namespace Parrot;

use Exception;

class AfricanParrot extends Parrot
{
    private function getLoadFactor(): float {
        return 9.0;
    }


    public function getSpeed(): float {
        return max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->dto->numberOfCoconuts);
    }

    public function getCry(): float
    {
        return 'Sqaark!';
    }
}
