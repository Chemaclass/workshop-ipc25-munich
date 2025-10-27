<?php

declare(strict_types=1);

namespace Parrot;

use Exception;

class AfricanParrot extends Parrot
{

    public const LOAD_FACTOR = 9.0;
    private int $numberOfCoconuts;

    public function __construct(int $numberOfCoconuts)
    {
        $this->numberOfCoconuts = $numberOfCoconuts;
    }

    /**
     * @throws Exception
     */
    public function getSpeed(): float
    {
        return max(0, self::BASE_SPEED - self::LOAD_FACTOR * $this->numberOfCoconuts);
    }

    /**
     * @throws Exception
     */
    public function getCry(): string
    {
        return 'Sqaark!';
    }

}
