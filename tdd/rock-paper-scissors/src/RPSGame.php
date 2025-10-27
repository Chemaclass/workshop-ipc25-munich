<?php

declare(strict_types=1);

namespace Kata;

final class RPSGame
{
    public function play(string $player1, string $player2): string
    {
        if (
            ($player1 === 'rock' && $player2 === 'scissors')
            || ($player1 === 'paper' && $player2 === 'rock')
            || ($player1 === 'scissors' && $player2 === 'paper')
        ) {
            return 'player1';
        }
        if (($player1 === 'scissors' && $player2 === 'rock')
            || ($player1 === 'rock' && $player2 === 'paper')
            || ($player1 === 'paper' && $player2 === 'scissors')) {
            return 'player2';
        }

        return 'draw';
    }

}
