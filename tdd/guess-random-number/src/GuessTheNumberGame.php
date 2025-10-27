<?php

declare(strict_types=1);

namespace Kata;

final class GuessTheNumberGame
{
    public function __construct(private ?int $number)
    {
    }

    public function changeMe(): bool
    {
        if($this->number === 5) {
            return true;
        }
        return false;
    }
}
