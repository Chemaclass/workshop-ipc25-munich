<?php

declare(strict_types=1);

namespace Kata;

final class ChangeMe
{
    public function changeMe(): bool
    {
        return true;
    }

    public function play(string $playerOne, string $playerTwo): string
    {
        if($playerOne === 'rock' && $playerTwo === 'scissors') {
            return 'Player 1';
        }

        return '';

    }

    
}
