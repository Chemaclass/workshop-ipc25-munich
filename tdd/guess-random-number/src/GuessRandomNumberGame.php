<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{
    public function __construct(
        public int $randomNumber = 5
    )
    {}
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
