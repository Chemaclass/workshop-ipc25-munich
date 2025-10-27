<?php

declare(strict_types=1);

namespace Kata;

final class Kata
{
    public function player1Wins($player, $opponent): bool
    {
        if ($player === 'rock' && $opponent === 'scissors') {
            return true;
        }

        return false;
    }
}
