<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class EuropeanParrot extends Parrot
{

    public function __construct()
    {
        
    }

    /**
     * @throws Exception
     */
    public function getSpeed(): float
    {
        return parent::BASE_SPEED;
    }

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return 'Sqoork!';
    }

}
