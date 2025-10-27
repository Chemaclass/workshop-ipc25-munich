<?php

declare(strict_types=1);

namespace Kata;

use RandomNumberGenerator;

final class GuessRandomNumberGame implements RandomNumberGenerator
{
    public function __construct(
        public int $randomNumber = 5
    )
    {}

    public function generate(): int
    {
        return rand(1, 10);
    }


    public function game(int $number): string
    {
        if($number < $this->randomNumber)
        {
            return 'lower';
        }

        if($number > $this->randomNumber)
        {
            return 'higher';
        }

        if($number === $this->randomNumber)
        {
            return 'even';
        }

        return '';
    }


}
