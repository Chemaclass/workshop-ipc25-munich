<?php

namespace Parrot;

class EuropeanParrot extends Parrot {

    public function getSpeed(): float {
        return $this->getBaseSpeed();
    }

    public function getCry(): float {
        return 'Sqoork!';
    }
}
