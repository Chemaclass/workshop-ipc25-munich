<?php

declare(strict_types=1);

namespace Kata;

final class GuessingNumberGame
{
    private int $randomNumber;
    private int $attempts = 0;

    public function __construct(int $number)
    {
        $this->randomNumber = $number;
    }

    public function play(int $playerNumber): string
    {
        if ($this->attempts >= 3) {
            return 'loose';
        }
        $this->attempts++;
        if ($playerNumber === $this->randomNumber) {
            return "win";
        }
        if ($playerNumber < $this->randomNumber) {
            return $this->attempts < 3 ? 'higher' : 'loose';
        }
        if ($playerNumber > $this->randomNumber) {
            return $this->attempts < 3 ? 'lower' : 'loose';
        }
    }
}
