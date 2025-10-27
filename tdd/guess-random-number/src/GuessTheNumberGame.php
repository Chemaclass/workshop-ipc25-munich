<?php

declare(strict_types=1);

namespace Kata;

final class GuessTheNumberGame
{
    private int $guessesCount = 0;

    public function __construct(private readonly int $number)
    {
    }

    public function guess(int $guessingNumber): string
    {
        $this->guessesCount++;

        if($guessingNumber === $this->number  ) {
            return "You win!";
        }

        if($this->guessesCount >= 3) {
            return "You lose!";
        }

        if($guessingNumber < $this->number) {
            return 'higher';
        }
        return 'lower';
    }
}
