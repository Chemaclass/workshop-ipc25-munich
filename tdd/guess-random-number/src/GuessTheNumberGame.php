<?php

declare(strict_types=1);

namespace Kata;

final class GuessTheNumberGame
{
    public function __construct(private readonly int $number)
    {
    }

    public function guess(int $guessingNumber): string
    {
        if($guessingNumber === $this->number  ) {
            return "You win!";
        }
//        if($)
        return 'lower';
    }
}
