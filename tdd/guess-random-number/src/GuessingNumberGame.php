<?php

declare(strict_types=1);

namespace Kata;

final class GuessingNumberGame
{
    private int $randomNumber;
    private int $attempts = 0;

    public function __construct(StubGenerator $stubGenerator)
    {
        $this->randomNumber = $stubGenerator->number;
    }

    public function play(int $playerNumber): string
    {
        if ($this->attempts >= 3) {
            return "game over";
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

        return "game over";
    }
}
