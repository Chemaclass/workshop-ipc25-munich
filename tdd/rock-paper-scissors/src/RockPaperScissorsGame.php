<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public function play(string $playerOne, string $playerTwo): string
    {
        if($playerOne === 'rock' && $playerTwo === 'scissors') {
            return 'Player 1';
        }

        if($playerOne === 'paper' && $playerTwo === 'rock') {
            return 'Player 1';
        }

        return 'Player 2';

    }

    
}
