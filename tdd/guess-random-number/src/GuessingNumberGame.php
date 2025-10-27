<?php

declare(strict_types=1);

namespace Kata;

final class GuessingNumberGame
{
    private int $randomNumber;
    public function __construct(int $number)
    {
        $this->randomNumber = $number;
    }
    
    public function play(int $playerNumber): bool
    {
        if ($playerNumber === $this->randomNumber) {
            return true;
        }
        return false;
    }
}
