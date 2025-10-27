<?php

declare(strict_types=1);

namespace Kata;

final class GessingNumberGame
{
    public const WIN = 'You win!';
    public const LOWER = 'Lower';
    public const HIGHER = 'Higher';

    public function __construct
    (
        readonly StubGenerator $stubGenerator
    )
    {
    }

    public function guessNumber(int $guessNumber): string
    {
        if ($this->stubGenerator->getNumber() < $guessNumber) {
            return self::LOWER;
        }

        if ($this->stubGenerator->getNumber() > $guessNumber) {
            return self::HIGHER;
        }

        return self::WIN;
    }
}
