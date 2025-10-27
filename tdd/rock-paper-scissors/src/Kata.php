<?php

declare(strict_types=1);

namespace Kata;

final class Kata
{
    public function playerWins($player, $opponent): bool
    {
        if ($player === 'rock' && $opponent === 'scissors') {
            return true;
        }

        if ($player === 'paper' && $opponent === 'rock') {
            return true;
        }

        if ($player === 'scissors' && $opponent === 'paper') {
            return true;
        }

        return false;
    }
}
