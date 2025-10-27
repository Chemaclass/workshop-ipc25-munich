<?php

declare(strict_types=1);

namespace Kata;

final class RPSGame
{
    public function play(string $player1, string $player2): string
    {
        if($player1 === $player2)
        {
            return 'draw';
        }

        if($player1 === 'rock' && $player2 === 'scissors')
        {
            return 'player1';
        }
        if($player1 === 'scissors' && $player2 === 'rock')
        {
            return 'player2';
        }

        return '';
    }

}
