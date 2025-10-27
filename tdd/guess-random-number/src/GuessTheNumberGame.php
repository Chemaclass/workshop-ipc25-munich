<?php

declare(strict_types=1);

namespace Kata;

final class GuessTheNumberGame
{
    public function __construct(private int $number)
    {
    }

    public function guess(int $guessingNumber): string
    {
        if($this->number === 5) {
            return "You win!";
        }
//        if($)
        return false;
    }
}
