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
    
    public function play(int $playerNumber): string
    {
        if ($playerNumber === $this->randomNumber) {
            return "win";
        }
        if ($playerNumber < $this->randomNumber) {
            return 'higher';
        }
        if ($playerNumber > $this->randomNumber) {
            return 'lower';
        }
        return "loose";
    }
}
