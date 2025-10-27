<?php

declare(strict_types=1);

namespace Kata;

final class GessingNumberGame
{
    public const WIN = 'You win!';

    public function guessNumber(int $number): string
    {
        return self::WIN;
    }
}
