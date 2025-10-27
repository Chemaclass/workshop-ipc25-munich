<?php

declare(strict_types=1);

namespace Kata;

final class GessingNumberGame
{
    public const WIN = 'You win!';

    public function __construtor(
        private readonly int $number
    )
    {
    }

    public function guessNumber(int $guessNumber): string
    {
        return self::WIN;
    }
}
