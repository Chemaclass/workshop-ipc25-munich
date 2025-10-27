<?php

declare(strict_types=1);

namespace Kata;

final class Kata
{
    public const WIN = 'win';
    public const LOSE = 'lose';
    public const DRAW = 'draw';

    public function playerWins($player, $opponent): string
    {
        if ($player === 'rock' && $opponent === 'scissors') {
            return self::WIN;
        }

        if ($player === 'paper' && $opponent === 'rock') {
            return self::WIN;
        }

        if ($player === 'scissors' && $opponent === 'paper') {
            return self::WIN;
        }

        if ($player === $opponent) {
            return self::DRAW;
        }

        return self::LOSE;
    }
}
